<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img class="lg:w-1/2 w-full lg:h-auto h-64 object-contain object-center rounded" src="{{asset('storage/')}}{{$advert->image}}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$advert->console_type}}</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$advert->title}}</h1>
                <div class="flex mb-4">
                </div>
                <p class="leading-relaxed">{{$advert->description}}</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                    <div class="">
                        <h2>Település</h2>
                        <p>{{$advert->user->county}} megye - {{$advert->user->city}}</p>
                        <h2>Állapot</h2>
                        <p>{{$advert->condition}}</p>
                        <h2>Csomagküldés?</h2>
                        <p>{{$advert->package}}</p>
                    </div>
                    <div class="flex ml-6 items-center">
                    </div>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">{{$advert->price}} Ft</span>
                    <button class="
                    @if($advert->console_type == 'Playstation') bg-blue-500 @endif
                    @if($advert->console_type == 'XBOX') bg-green-500 @endif
                    @if($advert->console_type == 'Nintendo') bg-red-500 @endif
                    flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Üzenek az eladónak</button>
                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <img src="{{asset('storage/')}}{{$advert->user->profile_image}}">
                    </button>
                </div>
            </div>
            <div class="flex mt-5">
                <span class="title-font font-medium text-2xl text-gray-900">Megvasarotlad a cuccot?</span>
                <button class="mx-5
                    @if($advert->console_type == 'Playstation') bg-blue-500 @endif
                    @if($advert->console_type == 'XBOX') bg-green-500 @endif
                    @if($advert->console_type == 'Nintendo') bg-red-500 @endif
                    flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Ertekelem</button>
                <button class=" mx-5
                    bg-gray-800 flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Jelentem</button>
            </div>
        </div>
    </div>

    <div class="container px-5  mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:flex  border-b py-4 lg:items-center lg:justify-between">
                <img class="h-16 rounded-lg w-16 mr-5 object-contain" src="{{asset('storage/')}}/{{$advert->image}}">
                <div class="            
            flex-1 min-w-0">
                    <h2 class="text-l font-bold  text-gray-900 sm:truncate">
                        {{$advert->title}}
                    </h2>
                    <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                        <div class="mt-2 min-w-1/4 flex items-center text-sm text-gray-500">
                            <i class="
            @if($advert->console_type == 'Playstation') text-blue-400 @endif
            @if($advert->console_type == 'XBOX') text-green-400 @endif
            @if($advert->console_type == 'Nintendo') text-red-400 @endif
            fas fa-tag mr-1 "></i>
                            {{$advert->user->county}} - {{$advert->user->city}}
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <img src="{{asset('storage/')}}/{{ $advert->user->profile_image }}" alt="avatar" class="w-5 h-5 object-cover rounded-full">
                            <a href="user/{{$advert->user->id}}">{{$advert->user->first_name}} {{$advert->user->last_name}}</a>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <i class="
            @if($advert->console_type == 'Playstation') text-blue-400 @endif
            @if($advert->console_type == 'XBOX') text-green-400 @endif
            @if($advert->console_type == 'Nintendo') text-red-400 @endif
            fas fa-tag mr-1 "></i>
                            <p>{{$advert->price}} Ft</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 flex lg:mt-0 lg:ml-4">
                    <span class="sm:ml-3">
                        <a href="adverts/{{ $advert->id }}" type="button" class="
            @if($advert->console_type == 'Playstation') bg-blue-400 @endif
            @if($advert->console_type == 'XBOX') bg-green-400 @endif
            @if($advert->console_type == 'Nintendo') bg-red-400 @endif
            inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white">
                            Megnezem!
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>