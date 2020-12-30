<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img  class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{asset('storage/')}}{{$advert->image}}">
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
                    <button 
                    class="
                    @if($advert->console_type == 'Playstation') bg-blue-500 @endif
                    @if($advert->console_type == 'XBOX') bg-green-500 @endif
                    @if($advert->console_type == 'Nintendo') bg-red-500 @endif
                    flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Üzenek az eladónak</button>
                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <img src="{{asset('storage/')}}{{$advert->user->profile_image}}">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>