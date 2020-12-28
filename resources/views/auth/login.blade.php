@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <div class="flex justify-center">        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ydTi0b.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"    autoplay></lottie-player>            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        </div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Jelentkezz be Trader fiokodba
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                vagy
                <a href="{{ route('register') }}" class="font-medium text-gray-600 hover:text-gray-500">
                    regisztralj ingyenesen!
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email cim</label>
                    <input 
                    id="email-address"
                    name="email"
                    type="email"
                    autocomplete="email"
                    value="{{ old('email') }}"
                    class="@error('email') is-invalid @enderror appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Jelszo</label>
                    <input 
                    id="password"
                    name="password"
                    type="password"
                    autocomplete="current-password"
                    class="@error('password') is-invalid @enderror appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input
                    type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                    class="h-4 w-4 text-gray-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Emlekezz ram
                    </label>
                </div>
                @if (Route::has('password.request'))
                <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-medium text-gray-600 hover:text-gray-500">
                        Elfelejtett jelszo?
                    </a>
                </div>
                @endif
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-500 group-hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Bejelentkezes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection