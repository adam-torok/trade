<div class="lg:flex  border-b py-4 lg:items-center lg:justify-between">
    <img class="h-16 rounded-lg w-16 mr-5 object-cover" src="{{asset('storage/')}}/{{$advert->image}}">
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

        @if($advert->user->id == Auth::user()->id)
        <span class="ml-3 sm:ml-3">
            <a href="adverts/edit/{{ $advert->id}}" type="button" 
            class="inline-flex items-center bg-gray-600 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white">
                Szerkesztes!
            </a>
        </span>
        @endif
        @if($advert->user->id == Auth::user()->id)
        <span class="ml-3 sm:ml-3">
            <form action="{{ route('advert.destroy', $advert->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="inline-flex items-center bg-gray-600 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white" type="submit">Torles</button>
            </form>
        </span>
        @endif

    </div>
</div>