<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @guest
            <span class="block">Megválnál használt játékodtól?</span>
            <span class="block text-gray-600">Csatlakozz hozzánk, és add tovább!</span>
            @else
            <span class="block">Megválnál használt játékodtól?</span>
            <span class="block text-gray-600">Add fel hirdetésedet és add tovább!</span>
            @endguest
        </h2>
        <div class="mt-8 lex lg:mt-0 lg:flex-shrink-0">
            @guest
            <div class="inline-flex rounded-md shadow">
                <a href="{{route( 'register' )}}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                    Regisztrálok
                </a>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
                <a href="{{route( 'login' )}}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-600 bg-white hover:bg-gray-50">
                    Bejelentkezek
                </a>
            </div>
            @else
            <div class="inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                    Hirdetes feladása
                </a>
            </div>
            @endguest
        </div>
    </div>
</div>