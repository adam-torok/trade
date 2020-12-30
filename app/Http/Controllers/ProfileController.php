<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        return view("layouts.profile.index",compact('user'));
    }

    public function update(){
        //return view("layouts.profile.index");
    }

    public function updateProfilePicture(Request $request){
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($request->hasFile('profile_image')){
            $user = User::findOrFail(auth()->user()->id);
            $avatar = $request->file('profile_image');
            $name = $user->first_name.'_'.$user->last_name.time();
            $folder = '/uploads/images/profile_images/';
            $filePath = $folder . $name. '.' . $avatar->getClientOriginalExtension();
            $this->uploadImage($avatar, $folder, 'public', $name);
            $user->profile_image = $filePath;
            $user->save();
            $request->session()->flash('msg', 'Sikeres profilkep frissites');
        }
    }
}
