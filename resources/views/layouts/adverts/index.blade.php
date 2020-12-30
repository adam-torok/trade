@extends('layouts.app')

@section('content')

@if (session('msg'))
<x-alerts.base />
@endif

<div class="sm:px-2 lg:px-6 m-5">
    <div class="mx-auto flex justify-center items-center  p-2 md:p-0">
        <div class=" p-6 grid grid-cols-1 gap-6 bg-white rounded-lg">
            <div class="flex flex-col md:flex-row">
                <div class="">
                    <select class="border p-2 rounded">
                        <option>Round-trip</option>
                        <option>Missouri</option>
                        <option>texas</option>
                    </select>
                </div>
                <div class="pt-6 md:pt-0 md:pl-6">
                    <select class="border p-2 rounded">
                        <option>4 Passangers</option>
                        <option>3 Passangers</option>
                        <option>2 Passangers</option>
                    </select>
                </div>
                <div class="pt-6 md:pt-0 md:pl-6">
                    <select class="border p-2 rounded">
                        <option>Economy</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="grid grid-cols-2 gap-2 border-gray-200 p-2 rounded">
                    <div class="flex  rounded bg-gray-300 items-center p-2 ">
                        <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                        </svg>
                        <input type="text" placeholder="Enter text here..." class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                    </div>
                    <div class="flex  rounded bg-gray-300 items-center p-2 ">
                        <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z" />
                        </svg>
                        <input type="text" placeholder="Enter text here..." class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2  border-gray-200 p-2 rounded">
                    <div class="flex  rounded bg-gray-300 items-center p-2 ">
                        <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z" />
                        </svg>
                        <input type="text" placeholder="Enter text here..." class="
                            bg-gray-300  max-w-full focus:outline-none text-gray-700" />
                    </div>
                    <div class="flex border rounded bg-gray-300 items-center p-2 ">
                        <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z" />
                        </svg>
                        <input type="text" placeholder="Enter text here..." class="                
                            max-w-full  bg-gray-300 focus:outline-none text-gray-700" />
                    </div>
                </div>
            </div>
            <div class="flex justify-center"><button class="
                @if(Request::is('ps')) bg-blue-400 @endif
                @if(Request::is('xbox')) bg-green-400 @endif
                @if(Request::is('nintendo')) bg-red-400 @endif
                p-2 border w-1/4 rounded-md bg-gray-800 text-white">Kereses!</button></div>
        </div>
    </div>
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
            <div class="px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Top traderek</h1>
                <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
                    <ul class="-mx-4">
                        <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Torok Adam</a><span class="text-gray-700 text-sm font-light">Created 23 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Torok Adam</a><span class="text-gray-700 text-sm font-light">Created 52 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Torok Adam</a><span class="text-gray-700 text-sm font-light">Created 73 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Torok Adam</a><span class="text-gray-700 text-sm font-light">Created 245 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Torok Adam
                                </a><span class="text-gray-700 text-sm font-light">Created 332 Posts</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-10 px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Friss hirdetesek</h1>
                <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                    <div class="mt-4"><a href="#" class="text-lg text-gray-700 font-medium hover:underline">
                            {{$adverts->first()->title}}</a></div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="w-8 h-8 object-cover rounded-full"><a href="#" class="text-gray-700 text-sm mx-3 hover:underline">Torok Adam</a></div><span class="font-light text-sm text-gray-600">Jun 1, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="m-5">
    {{$adverts->links()}}
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