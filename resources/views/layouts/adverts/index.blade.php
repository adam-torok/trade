@extends('layouts.app')

@section('content')

@if (session('msg'))
<x-alerts.base />
@endif
<x-alert />

<div class="sm:px-2  mx-auto lg:px-6 m-5">
    <form method="get" class="flex justify-between container mx-auto w-full">
        <div class="w-full p-6 grid grid-cols-1 gap-5 bg-white rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row">
                <div>
                    <select name="condition" class="border p-2 rounded">
                        <option selected value="">Kondicio</option>
                        <option>Hasznalt</option>
                        <option>Uj</option>
                    </select>
                </div>
                <div class="pt-6 md:pt-0 md:pl-6">
                    <select name="county" class="border p-2 rounded">
                        <option selected value="">Megye</option>
                        <option>Bács-Kiskun</option>
                        <option>Baranya</option>
                        <option>Békés</option>
                        <option>Borsod-Abaúj-Zemplén</option>
                        <option>Csongrád-Csanád</option>
                        <option>Fejér</option>
                        <option>Győr-Moson-Sopron</option>
                        <option>Hajdú-Bihar</option>
                        <option>Heves</option>
                        <option>Jász-Nagykun-Szolnok</option>
                        <option>Komárom-Esztergom</option>
                        <option>Nógrád</option>
                        <option>Pest</option>
                        <option>Somogy</option>
                        <option>Szabolcs-Szatmár-Bereg</option>
                        <option>Tolna</option>
                        <option>Vas</option>
                        <option>Veszprém</option>
                        <option>Zala</option>
                    </select>
                </div>
                <div class="pt-6 md:pt-0 md:pl-6">
                    <select name="advert_type" class="border p-2 rounded">
                        <option selected value="">Szandek</option>
                        <option>Elad</option>
                        <option>Keres</option>
                        <option>Cserel</option>
                    </select>
                </div>
                <div class="flex items-center pt-6 md:pt-0 md:pl-6">
                    <label class="mr-1">Csomagkuldessel?</label>
                    <input type="checkbox" name="package">
                </div>
            </div>
            <div class="grid grid-cols-1">
                    <div class="flex  rounded bg-gray-300 items-center p-2 ">
                        <input type="text" name="title" placeholder="Kulcsszora kereses..." class="bg-gray-300  max-w-full focus:outline-none text-gray-700" />
                    </div>             
            </div>
            <div class="flex justify-center">
                <button type="submit" class="
                    @if(Request::is('ps')) bg-blue-400 hover:bg-blue-700 focus:ring-blue-600 @endif
                    @if(Request::is('xbox')) bg-green-400 hover:bg-green-700 focus:ring-green-600 @endif
                    @if(Request::is('nintendo')) bg-red-400 hover:bg-red-700 focus:ring-red-600 @endif     
                    focus:outline-none focus:ring-2  focus:ring-opacity-50 p-2 border w-1/4 rounded-md bg-gray-800 text-white"><i class="fas fa-search mr-1"></i>Kereses</button>
            </div>
        </div>
    </form>
    <div class="flex justify-between container mx-auto">
        <div class="w-full sm:px-2 sm:w-full lg:w-full">
            <div class="mt-6">
                <div class="max-w-full grid md:grid-cols-1 px-2 lg:px-10 py-6 bg-white rounded-lg shadow-md">
                    @foreach($adverts as $advert)
                    <x-advert :advert="$advert" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pb-20 w-3/3 flex justify-center">
    {{$adverts->withQueryString()->links()}}
</div>

<x-navs.consoles/>
@endsection