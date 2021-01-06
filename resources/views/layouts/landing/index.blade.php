@extends('layouts.app')

@section('content')
<x-alert />
<div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Felhasznalok
                            </div>
                            <div class="text-xl font-bold">
                                23
                            </div>
                        </div>
                        <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                            </path>
                            <circle cx="9" cy="7" r="4">
                            </circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87">
                            </path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Hirdetesek
                            </div>
                            <div class="text-xl font-bold">
                                45
                            </div>
                        </div>
                        <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12">
                            </polyline>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Valami
                            </div>
                            <div class="text-xl font-bold">
                                4078
                            </div>
                        </div>
                        <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                            </path>
                            <polyline points="15 3 21 3 21 9">
                            </polyline>
                            <line x1="10" x2="21" y1="14" y2="3">
                            </line>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Valami
                            </div>
                            <div class="text-xl font-bold">
                                31h 2m
                            </div>
                        </div>
                        <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10">
                            </circle>
                            <polyline points="12 6 12 12 16 14">
                            </polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="max-w-5xl mx-auto py-10">
    <div>
        <div class="flex flex-row">
            <div class="hidden md:flex flex-col items-center">
                <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
                    <div class="text-3xl font-black text-gray-500">Step 1</div>
                    <div class="text-gray-500 text-sm">Megunt jatek</div>
                </div>
                <div class="h-full border-l-4 border-transparent">
                    <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
                </div>
            </div>
            <div class="flex-auto border rounded  border-gray-300">
                <div class="flex md:flex-row flex-col items-center">
                    <div class="flex-auto">
                        <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 1</span> - Idea</div>
                        <div class="p-3 text-3xl font-extrabold text-gray-800 tracking-tight">Meguntad a jatekodat? Megvalnal tole?</div>
                        <div class="px-3 pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis, voluptates error alias dolorem praesentium sit soluta iure incidunt labore explicabo eaque, quia architecto veritatis dolores, enim consequatur nihil ipsum.</div>
                    </div>
                    <div class="md:w-96 w-full p-5"><img src="https://image.flaticon.com/icons/svg/1330/1330216.svg" alt="step 1" class="object-scale-down"></div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-row">
            <div class="border-t-4 border-r-4 border-transparent">
                <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
            </div>
            <div class="border-t-4 border-transparent flex-auto">
                <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
            </div>
            <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
        </div>
        <div class="flex flex-row-reverse">
            <div class="hidden md:flex flex-col items-center">
                <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
                    <div class="text-3xl font-black text-gray-500">Step 2</div>
                    <div class="text-gray-500 text-sm">Regisztracio</div>
                </div>
                <div class="h-full border-r-4 border-transparent">
                    <div class="border-l-4 ml-4 h-full border-gray-300 border-dashed"></div>
                </div>
            </div>
            <div class="flex-auto border rounded  border-gray-300">
                <div class="flex md:flex-row flex-col items-center">
                    <div class="flex-auto">
                        <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 2</span> - Collaboration</div>
                        <div class="p-3 text-3xl font-extrabold text-gray-800 tracking-tight">Regisztralj az oldalra, es hozzd letre hirdetesedet</div>
                        <div class="px-3 pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis, voluptates error alias dolorem praesentium sit soluta iure incidunt labore explicabo eaque, quia architecto veritatis dolores, enim consequatur nihil ipsum.</div>
                    </div>
                    <div class="md:w-96 w-full p-5"><img src="https://image.flaticon.com/icons/svg/1330/1330216.svg" alt="step 2" class="object-scale-down"></div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-row-reverse">
            <div class="border-t-4 border-l-4 border-transparent">
                <div class="w-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-b-4 rounded-br-full"></div>
            </div>
            <div class="border-t-4 border-transparent flex-auto">
                <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
            </div>
            <div class="w-16 mt-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-t-4 rounded-tl-full"></div>
        </div>
        <div class="flex flex-row">
            <div class="hidden md:flex flex-col items-center">
                <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
                    <div class="text-3xl font-black text-gray-500">Step 3</div>
                    <div class="text-gray-500 text-sm">Turelem</div>
                </div>
                <div class="h-full border-l-4 border-transparent">
                    <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
                </div>
            </div>
            <div class="flex-auto border rounded  border-gray-300">
                <div class="flex md:flex-row flex-col items-center">
                    <div class="flex-auto">
                        <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 3</span> - Planification</div>
                        <div class="p-3 text-3xl font-extrabold text-gray-800 tracking-tight">Vard meg, mig egy masik felhasznalo meglatja hirdetesed</div>
                        <div class="px-3 pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis, voluptates error alias dolorem praesentium sit soluta iure incidunt labore explicabo eaque, quia architecto veritatis dolores, enim consequatur nihil ipsum.</div>
                    </div>
                    <div class="md:w-96 w-full p-5"><img src="https://image.flaticon.com/icons/svg/1330/1330216.svg" alt="step 3" class="object-scale-down"></div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-row">
            <div class="border-t-4 border-r-4 border-transparent">
                <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
            </div>
            <div class="border-t-4 border-transparent flex-auto">
                <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
            </div>
            <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
        </div>
        <div class="flex flex-row-reverse">
            <div class="hidden md:flex flex-col items-center">
                <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
                    <div class="text-3xl font-black text-gray-500">Step 4</div>
                    <div class="text-gray-500 text-sm">Lebonyolitas</div>
                </div>
            </div>
            <div class="flex-auto border rounded  border-gray-300">
                <div class="flex md:flex-row flex-col items-center">
                    <div class="flex-auto">
                        <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 4</span> - Implementation</div>
                        <div class="p-3 text-3xl font-extrabold text-gray-800 tracking-tight">Privat uzenetben ugyintezes</div>
                        <div class="px-3 pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis, voluptates error alias dolorem praesentium sit soluta iure incidunt labore explicabo eaque, quia architecto veritatis dolores, enim consequatur nihil ipsum.</div>
                    </div>
                    <div class="md:w-96 w-full p-5"><img src="https://image.flaticon.com/icons/svg/1330/1330216.svg" alt="step 4" class="object-scale-down"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection