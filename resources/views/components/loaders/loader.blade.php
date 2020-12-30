<div 
class="loader   ">
    <div class=" @if(Request::is('ps')) bg-blue-400 @endif
                @if(Request::is('xbox')) bg-green-400 @endif
                @if(Request::is('nintendo')) bg-red-400 @endif spinner-container">
        <i class="fas animated infinite bounce loader fa-gamepad fa-lg"></i>
        <p class="text-sm">Betöltés...</p>
    </div>
</div>