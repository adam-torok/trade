<nav class="flex border-b-4 border-black sticky items-center justify-between flex-wrap  bg-gray-500 p-3 fixed w-full z-10 top-0">
	<div class="flex items-center flex-shrink-0 text-white mr-6">
		<a class="text-white no-underline hover:text-white hover:no-underline" href="/">
			<span data-tippy-content="Vissza a fooldalra!" class="text-2xl pl-2"><i class="fas fa-bomb fa-lg"></i></span>
		</a>
	</div>

	<div class="block lg:hidden">
		<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-white border-gray-600 hover:text-white hover:border-white">
			<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<title>Menu</title>
				<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
			</svg>
		</button>
	</div>

	<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
		<ul class="list-reset lg:flex justify-end flex-1 items-center">
			@guest
			<li class="mr-3">
				<a class="inline-block py-2 px-4 text-white no-underline" href="/">Főoldal</a>
			</li>
			<li class="mr-3">
				<a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('adverts')}}">Hirdetések</a>
			</li>
			@if (Route::has('login'))
			<li class="mr-3">
				<a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('login')}}">Bejelentkezés</a>
			</li>
			@endif
			@if (Route::has('register'))
			<li class="mr-3">
				<a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('register')}}">Regisztráció</a>
			</li>
			@endif
			@else
			<a data-tippy-content="Hirdetesek" href="{{route('adverts')}}" id="navbarDropdown" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">
				Hirdetesek
			</a>
			<a data-tippy-content="Üzenetek" href="{{route('adverts')}}" id="navbarDropdown" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">
				<i class="fas fa-lg fa-envelope"></i>
			</a>
			<a data-tippy-content="{{Auth::user()->first_name}} {{Auth::user()->last_name}}" href="{{route('profile')}}" id="navbarDropdown" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">
				<img class="inline object-cover h-8 w-8 rounded-full" src="{{asset('storage/')}}/{{ Auth::user()->profile_image }}">
			</a>
			<a data-tippy-content="Kijelentkezés" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
				<i class="fas fa-lg fa-sign-out-alt"></i>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
			@endguest
		</ul>
	</div>
</nav>