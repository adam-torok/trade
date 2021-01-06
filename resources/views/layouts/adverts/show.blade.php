@extends('layouts.app')

@section('content')

@if (session('msg'))
<x-alerts.base />
@endif
<div class="flex justify-between container mx-auto">
        <div class="w-full sm:px-2 sm:w-full lg:w-10/12">
            <x-single-advert :advert="$advert" />
        </div>
        <div class="-mx-8 w-2/12 hidden lg:block">
            <div class="px-8 py-6">
                <div class="flex flex-col bg-white max-w-sm mx-auto">
                    <img src="https://via.placeholder.com/120x600?text=120x600+Skyscraper
                    C/O https://placeholder.com/banner-ads/" alt="ad">
                </div>
            </div>
        </div>
    </div>
<x-navs.consoles/>

@endsection