@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <form enctype="multipart/form-data" method="POST" action="{{ route('advert.create') }}">
        @csrf
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Hirdetes cime
                </label>
                <input value="{{ old('title') }}" autofocus class="appearance-none block w-full bg-grey-lighter @error('title') border-red-500 @enderror text-grey-darker border  rounded py-3 px-4 mb-3"
                id="grid-title"
                type="text"
                name="title"
                placeholder="Hirdetesed cime">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                </span>
                @enderror
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Hirdetesed leirasa
                </label>
                <textarea
                class="appearance-none block w-full @error('description') border-red-500 @enderror bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-description"
                type="text"
                name="description" placeholder="Hirdetesed leirasa roviden, max 255 karakter"></textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                </span>
                @enderror
            </div>
        </div>
        <div class="-mx-3 px-3 md:flex mb-6">
            <div class=" mb-2 border relative bg-gray-100 mb-4 shadow-inset">
                <img id="profile_iamge_preview" class="object-cover w-full h-32" src="" />
                <label data-tippy-content="Tolts fel egy kepet a hirdetesedhez"
                for="advert_image" type="button" class="w-full cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                        <circle cx="12" cy="13" r="3" />
                    </svg>
                    Valaszd ki hirdetesed kepet
                </label>
                @error('advert_image')
                <span class="invalid-feedback" role="alert">
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                </span>
                @enderror
                <input id="advert_image" name="advert_image" accept="image/*" class="hidden" type="file">
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                for="grid-console_type">
                    Konzol tipus
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded mb-3"
                    id="grid-console_type" name="console_type">
                        <option>Playstation</option>
                        <option>XBOX</option>
                        <option>Nintendo</option>
                    </select>
                    @error('console_type')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-advert_type">
                    Szandek
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded mb-3"
                    id="grid-advert_type" name="advert_type">
                        <option>Elad</option>
                        <option>Keres</option>
                        <option>Cserel</option>
                    </select>
                    @error('advert_type')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                    Allapot
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded mb-3"
                    id="grid-condition" name="condition">
                        <option>Uj</option>
                        <option>Egyszer jatszott</option>
                        <option>Hasznalt</option>
                    </select>
                    @error('condition')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-package">
                    Csomagkuldes?
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded mb-3"
                    id="grid-package" name="package">
                        <option>Igen</option>
                        <option>Nem</option>
                    </select>
                    @error('advert_type')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-price">
                    Ar
                </label>
                <input class="appearance-none  @error('price') border-red-500 @enderror block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-price" type="text" name="price" placeholder="Ird be az osszeget">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                </span>
                @enderror
            </div>
        </div>
        <div class="mt-8">
            <button type="submit" class="hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 mx-auto relative sm:mt-0 sm:h-auto  block w-full sm:w-auto border border-transparent px-6 py-3 text-base font-semibold leading-snug bg-gray-500 text-white rounded-md shadow-md bg-gray-400  hover:bg-gray-400">
                Hirdetes feladasa
            </button>
        </div>
    </form>
</div>
@endsection