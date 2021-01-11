<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoxController extends Controller
{
    public function index(Request $request)
    {
        $boxes = Auth::user()->boxes;
        $adverts = [];
        foreach ($boxes as $box) {
            $advert = Advert::find($box->advert_id);
            array_push($adverts,$advert);
        }
        return view('layouts.boxes.index', compact('adverts'));
    }

    public function add(Request $request)
    {
        Box::create([
            'user_id' => auth()->user()->id,
            'advert_id' => $request->id,
        ]);
        $request->session()->flash('msg', 'Sikeresen dobozba tetted!');
        return redirect('/box');
    }

    public function remove(Request $request)
    {
        Box::where('advert_id',$request->id)->where('user_id',Auth::user()->id)->delete();
        $request->session()->flash('msg', 'Sikeres hirdetes torles');
        return redirect('/profile');
    }
}
