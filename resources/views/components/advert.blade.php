<a href="adverts/{{ $advert->id }}" class="flex items-center justify-center">
    <div class="max-w-sm w-full sm:w-full lg:w-full py-6 pt-0 px-3">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="bg-cover bg-center h-36 p-4" style="background-image: url('storage{{ $advert->image }}')">
            </div>
            <div class="p-4">
                <p class="text-xl text-gray-900">{{ $advert->title }} Ft</p>
                <p class="text-gray-700">{{ $advert->description }}</p>
            </div>
            
            <div class="
            @if($advert->console_type == 'Playstation') bg-blue-300 @endif
            @if($advert->console_type == 'XBOX') bg-green-300 @endif
            @if($advert->console_type == 'Nintendo') bg-red-300 @endif
            px-4 pt-3 pb-4 border-t border-gray-300">
                <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Hirdető</div>
                <div class="flex items-center pt-2">
                    <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(storage/{{$advert->user->profile_image}})">
                    </div>
                    <div>
                        <p class="font-bold text-gray-900">{{ $advert->user->first_name }} {{ $advert->user->last_name }}  </p>
                        <p class="text-bold text-gray-900">Ár: {{$advert->price}} Ft</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

