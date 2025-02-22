<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Traits\UploadTrait;
use EloquentFilter\Filterable;
use Illuminate\Http\Request;

class AdvertController extends Controller
{

    use UploadTrait, Filterable;

    public function index(Request $request)
    {
        //dd($request->input());
        //Debugging the filtering
        $adverts = Advert::filter($request->input())->paginate(10);
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

    public function edit(Advert $advert){
        $advert = $advert;
        return view('layouts.adverts.edit',compact('advert'));
    }

    public function update(Request $request){
        $advert = Advert::findOrFail($request->id);
        $advert->title = $request->title;
        $advert->description = $request->description;
        $advert->console_type = $request->console_type;
        $advert->advert_type = $request->advert_type;
        $advert->price = $request->price;
        $advert->package = $request->package;
        $advert->condition = $request->condition;
        $advert->save();
        $request->session()->flash('msg', 'Sikeres hirdetes frissites');
        return redirect('/profile');
    }

    public function destroy(Request $request){
        Advert::where('id',$request->id)->delete();
        $request->session()->flash('msg', 'Sikeres hirdetes torles');
        return redirect('/profile');
    }
}
