@extends('layouts.app')

@section('content')

@if (session('msg'))
<x-alerts.base />
@endif

<div class="sm:px-2 lg:px-6 m-5">
    <div class="flex justify-between container mx-auto">
        <div class="w-full sm:px-2 sm:w-full lg:w-9/12">
            <div class="mt-6">
                <div class="max-w-full grid md:grid-cols-1 px-2 lg:px-10 py-6 bg-white rounded-lg shadow-md">
                    @foreach($adverts as $advert)
                    <x-advert :advert="$advert" />
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="-mx-8 w-3/12 hidden lg:block">
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
<x-navs.consoles/>
@endsection