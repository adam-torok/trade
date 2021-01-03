<div 
    class="loader">
    <div class="bg-gray-400
                @if(Request::is('ps')) bg-blue-400 @endif
                @if(Request::is('xbox')) bg-green-400 @endif
                @if(Request::is('nintendo')) bg-red-400 @endif spinner-container">
        <i class="fas animated fa-4x infinite bounce loader fa-gamepad"></i>
        <p class="text-sm">
            @if(Request::is('ps')) Playstation jatekok @endif
            @if(Request::is('xbox')) Xbox jatekok @endif 
            @if(Request::is('nintendo')) Nintendo jatekok @endif
            @if(Request::is('adverts')) Hirdetesek @endif   betöltése...</p>
    </div>
</div>