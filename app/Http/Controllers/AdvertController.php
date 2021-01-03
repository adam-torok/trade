<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvertController extends Controller
{

    use UploadTrait;

    public function index()
    {
        $adverts = Advert::orderBy('id', 'desc')->paginate(10);
        return view('layouts.adverts.index', compact('adverts'));
    }

    public function playstation()
    {
        $adverts = Advert::where('console_type','Playstation')->orderBy('id', 'desc')->paginate(10);
        return view('layouts.adverts.index', compact('adverts'));
    }

    public function xbox()
    {
        $adverts = Advert::where('console_type','XBOX')->orderBy('id', 'desc')->paginate(10);
        return view('layouts.adverts.index', compact('adverts'));
    }

    public function nintendo()
    {
        $adverts = Advert::where('console_type','Nintendo')->orderBy('id', 'desc')->paginate(10);
        return view('layouts.adverts.index', compact('adverts'));
    }

    public function show(Advert $advert)
    {
        $advert = $advert;
        return view('layouts.adverts.show',compact('advert'));
    }

    public function create()
    {
        return view('layouts.adverts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255|min:5',
            'description' => 'required|max:255|min:5',
            'advert_image' =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|integer',
        ], [
            'required' => 'A(z) :attribute mezo kitoltese kotelezo',
            'max:255' => 'A(z) :attribute mezo maximum 255 karakterkbol allhat',
            'min:5' => 'A(z) :attribute mezo minimum 5 karakterkbol allhat'
        ], [
            'title' => 'cim',
            'description' => 'leiras',
            'advert_image' => 'hirdetes kepe'

        ]);
        if ($request->hasFile('advert_image')) {
            $advert_image = $request->file('advert_image');
            $folder = '/uploads/images/advert_images/';
            $advert_image_name = $request->title . '_' . time();
            $filePath = $folder . $advert_image_name . '.' . $advert_image->getClientOriginalExtension();
            $this->uploadImage($advert_image, $folder, 'public', $advert_image_name);
            Advert::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filePath,
                'console_type' => $request->console_type,
                'advert_type' => $request->advert_type,
                'price' => $request->price,
                'package' => $request->package,
                'condition' => $request->condition
            ]);
            $request->session()->flash('msg', 'Sikeres hirdetes letrehozas');
            return redirect('/adverts');
        }
    }
}
