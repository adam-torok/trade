@extends('layouts.app')

@section('content')

@if (session('msg'))
<x-alerts.base />
@endif

<div class="sm:px-2 lg:px-6 m-5">
    <form method="get" class="filtering mx-auto flex justify-center items-center  p-2 md:p-0">
        <div class=" p-6 grid grid-cols-1 gap-6 bg-white rounded-lg">
            <div class="flex flex-col md:flex-row">
                <div>
                    <select name="condition" class="border p-2 rounded">
                        <option>Hasznalt</option>
                        <option>Uj</option>
                    </select>
                </div>
                <div class="pt-6 md:pt-0 md:pl-6">
                    <select name="county" class="border p-2 rounded">
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
                    <select name="console_type" class="border p-2 rounded">
                        <option>Playstation</option>
                        <option>Xbox</option>
                        <option>Nintendo</option>
                    </select>
                </div>
                <div class="pt-6 md:pt-0 md:pl-6">
                    <select name="advert_type" class="border p-2 rounded">
                        <option>Elad</option>
                        <option>Keres</option>
                        <option>Csere</option>
                    </select>
                </div>
                <div class="pt-6 md:pt-0 md:pl-6">
                    <label>Csomagkuldessel?</label>
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
                @if(Request::is('ps')) bg-blue-400 @endif
                @if(Request::is('xbox')) bg-green-400 @endif
                @if(Request::is('nintendo')) bg-red-400 @endif
                p-2 border w-1/4 rounded-md bg-gray-800 text-white">Kereses!</button>
            </div>
        </div>
    </form>
    <div class="flex justify-between container mx-auto">
        <div class="w-full sm:px-2 sm:w-full lg:w-8/12">
            <div class="mt-6">
                <div class="max-w-4xl grid md:grid-cols-1 px-2 lg:px-10 py-6 bg-white rounded-lg shadow-md">
                    @foreach($adverts as $advert)
                    <x-advert :advert="$advert" />
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="-mx-8 w-4/12 hidden lg:block">
            <div class="px-8 py-6">
                <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
                    <ul class="list-disc p-2 text-gray-600">
                        <li>
                            <b>Az oldal jelenleg beta funkciokkal mukodik!</b>
                        </li>
                        <li>
                            <b>Ne utalj előre! Soha!</b>
                        </li>
                        <li>
                            <b>Probléma, csalás esetén minden hirdetésben ott a "Jelentem" gomb, használd!</b>
                        </li>
                        <li>
                            <b>Konkrét hibát itt, általános észrevételeket itt jelezz!</b>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="px-8 mt-10">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Top traderek</h1>
                <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
                    <ul class="-mx-4">
                        <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Torok Adam</a><span class="text-gray-700 text-sm font-light">Created 23 Posts</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-20 w-2/3 flex justify-center">
    {{$adverts->links()}}
</div>

<x-navs.consoles/>
@endsection