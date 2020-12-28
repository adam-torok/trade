@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <form method="POST" action="{{ route('register') }}">
    @csrf
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Keresztnév
                </label>
                <input
                value="{{ old('first_name') }}" autocomplete="first_name" autofocus
                class="appearance-none block w-full bg-grey-lighter @error('first_name') border-red-500 @enderror text-grey-darker border  rounded py-3 px-4 mb-3"
                id="grid-first-name"
                type="text"
                name="first_name"
                placeholder="Keresztnév">
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                @enderror
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Vezetéknév
                </label>
                <input
                value="{{ old('last_name') }}" autocomplete="last_name" autofocus
                class="appearance-none block w-full bg-grey-lighter text-grey-darker @error('last_name') border-red-500 @enderror border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-last-name"
                type="text"
                name="last_name"
                placeholder="Vezetéknév">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                @enderror
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Email cím
                </label>
                <input 
                class="appearance-none block w-full @error('email') border-red-500 @enderror bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-email"
                type="email"
                name="email"
                placeholder="emailcimed@email.hu">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                @enderror
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide @error('password') border-red-500 @enderror text-grey-darker text-xs font-bold mb-" for="grid-password">
                    Jelszó
                </label>
                <input 
                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-password"
                type="password"
                name="password"
                placeholder="*********">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                @enderror
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Jelszó újra
                </label>
                <input
                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-password"
                type="password"
                name="password_confirmation"
                placeholder="*********">
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                    Város
                </label>
                <input 
                class="appearance-none block w-full bg-grey-lighter @error('city') border-red-500 @enderror text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-city"
                type="text"
                name="city"
                placeholder="Városod">
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                @enderror
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                    Megye
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded mb-3"
                    id="grid-state"
                    name="county">
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
                    @error('county')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                    Irányítószám
                </label>
                <input
                class="appearance-none  @error('zip') border-red-500 @enderror block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                id="grid-zip"
                type="text"
                name="zip"
                placeholder="6000">
                @error('zip')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mt-8">
            <button type="submit" class=" mx-auto relative sm:mt-0 sm:h-auto  block w-full sm:w-auto border border-transparent px-6 py-3 text-base font-semibold leading-snug bg-gray-500 text-white rounded-md shadow-md bg-gray-400		 focus:outline-none focus:bg-gray-400		 transition ease-in-out duration-150 hover:bg-gray-400">
                Regisztráció befejezése
            </button>
        </div>
    </form>
</div>
@endsection