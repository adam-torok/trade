<div class="lg:flex  border-b py-4 lg:items-center lg:justify-between">
    <img class="w-full h-1/2 lg:h-20 lg:w-20 rounded-lg  mr-5 object-cover" src="{{asset('storage/')}}/{{$advert->image}}">
    <div class="flex-1 min-w-0 mt-4 lg:m-0">
        <a href="adverts/{{ $advert->id }}" class=" text-l font-bold  text-gray-900 sm:truncate">
            {{$advert->title}}
        </a>
        <div class="mt-1 grid grid-cols-2 lg:grid-cols-4 flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
            <div class="mt-2 min-w-1/4 flex items-center text-sm text-gray-500">
                <i class="
                    @if($advert->console_type == 'Playstation') text-blue-400 @endif
                    @if($advert->console_type == 'XBOX') text-green-400 @endif
                    @if($advert->console_type == 'Nintendo') text-red-400 @endif
                    fas fa-city mr-1 "></i>
                    {{$advert->county}} megye -  {{$advert->city}}
            </div>
            <div class="mt-2 min-w-1/4 flex items-center text-sm text-gray-500">
                <i class="
                    @if($advert->console_type == 'Playstation') text-blue-400 @endif
                    @if($advert->console_type == 'XBOX') text-green-400 @endif
                    @if($advert->console_type == 'Nintendo') text-red-400 @endif
                    fas fa-city mr-1 "></i>
                {{$advert->time_elapsed_string($advert->created_at)}}
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <img src="{{asset('storage')}}/uploads/images/profile_images/{{ $advert->user->profile_image }}" alt="avatar" class="w-5 h-5 mr-1 object-cover rounded-full">
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
    <div class="mt-5 flex justify-end items-center lg:justify-center	lg:mt-0 lg:ml-4">
        <span class="sm:ml-3">
            <a  data-tippy-content="Megnezem!" 
                href="adverts/{{ $advert->id }}"
                type="button" class="
                    @if($advert->console_type == 'Playstation') bg-blue-400 hover:bg-blue-700 focus:ring-blue-600 @endif
                    @if($advert->console_type == 'XBOX') bg-green-400 hover:bg-green-700 focus:ring-green-600 @endif
                    @if($advert->console_type == 'Nintendo') bg-red-400 hover:bg-red-700 focus:ring-red-600 @endif
                    focus:outline-none focus:ring-2  focus:ring-opacity-50
                    inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white">
                    <i class="
                    @if($advert->console_type == 'Playstation') fab fa-playstation  @endif
                    @if($advert->console_type == 'XBOX') fab fa-xbox @endif
                    @if($advert->console_type == 'Nintendo')fas fa-gamepad @endif"></i>
            </a>
        </span>
    @auth
        @if($advert->user->id != Auth::user()->id)
            @if(!Request::is('box'))
                <span class="ml-2 sm:ml-3">
                    <a href="{{route('box.store',$advert->id)}}" 
                        data-tippy-content="Bobozolom!" 
                        type="button" 
                        class="focus:outline-none focus:ring-2  focus:ring-opacity-50
                            inline-flex items-center px-4 py-2 border border-transparent
                            bg-gray-500 hover:bg-gray-700 rounded-md shadow-sm text-sm font-medium text-white">
                        <i class="fas fa-box-open"></i>
                    </a>
                </span>
            @endif
            @if(Request::is('box'))
            <span class="ml-2 sm:ml-3">
                    <a href="{{route('box.remove',$advert->id)}}" 
                        data-tippy-content="Eltavolitom!" 
                        type="button" 
                        class="focus:outline-none focus:ring-2  focus:ring-opacity-50
                            inline-flex items-center px-4 py-2 border border-transparent
                            bg-gray-500 hover:bg-gray-700 rounded-md shadow-sm text-sm font-medium text-white">
                        <i class="fas fa-recycle"></i>
                    </a>
            </span>
            @endif
        @endif
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
    @endauth
    </div>
</div>