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

<nav class="bottom-nav p-2 fixed bottom-0 w-full border bg-white flex overflow-x-auto">
    <a href="/xbox" class="p-2 flex cursor-pointer flex-col flex-grow items-center justify-center
        overflow-hidden whitespace-no-wrap text-sm transition-colors duration-100
        ease-in-out hover:bg-green-200 focus:text-green-500">
        <i class="fab text-green-500 fa-xbox fa-lg"></i>
    </a>
    <a href="/ps" class="p-2 cursor-pointer flex flex-col flex-grow items-center justify-center
        overflow-hidden whitespace-no-wrap text-sm transition-colors duration-100
        ease-in-out hover:bg-blue-200 focus:text-blue-500">
        <i class="text-blue-500 fab fa-playstation fa-lg"></i>
    </a>
    <a href="/nintendo" class="p-2 flex cursor-pointer flex-col flex-grow items-center justify-center
	overflow-hidden whitespace-no-wrap text-sm transition-colors duration-100
	ease-in-out hover:bg-red-200 focus:text-red-500">
        <i class="fas text-red-600 fa-gamepad fa-lg"></i>
    </a>
</nav>
@endsection