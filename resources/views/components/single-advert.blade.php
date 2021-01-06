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
                <div class="flex items-center">
                    <button class="m-2 rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500">
                        <a href="">
                            <img src="{{asset('storage')}}/uploads/images/profile_images/{{ $advert->user->profile_image }}">
                        </a>
                    </button>
                    {{$advert->user->first_name}} {{$advert->user->last_name}}
                </div>
                <div class="flex mt-2 items-center pb-5 border-b-2 border-gray-100 mb-5">
                    <div class="grid grid-cols-2 gap-1  ">
                            <h2><b>Megye:</b></h2>
                            <p>{{$advert->county}} megye</p>
                            <h2><b>Település</b></h2>
                            <p>{{$advert->city}}</p>
                            <h2><b>Szandek</b></h2>
                            <p>{{$advert->advert_type}}</p>
                            <h2><b>Állapot:</b></h2>
                            <p>{{$advert->condition}}</p>
                            <h2><b>Csomagküldés?</b></h2>
                            <p>{{$advert->package}}</p>
                            <h2><b>Felretett?</b></h2>
                            <p>{{$advert->shelfed == 1 ? 'Felretett' : 'Nem'}}</p>
                    </div>
                    <div class="flex ml-6 items-center">
                    </div>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">{{$advert->price}} Ft</span>
                    <a href="{{route('chats')}}" class="
                    @if($advert->console_type == 'Playstation') bg-blue-500 @endif
                    @if($advert->console_type == 'XBOX') bg-green-500 @endif
                    @if($advert->console_type == 'Nintendo') bg-red-500 @endif
                    flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Üzenek az eladónak</a>
                </div>
            </div>
            <div class="mt-5">
                <p class="title-font font-medium text-2xl text-gray-900">Megvetted a cuccot?</p>
                <div class="flex mb-4">
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
    </div>

    
</section>