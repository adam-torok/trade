<div class="bg-gray-600   @if(Request::is('ps')) bg-blue-400 @endif
                            @if(Request::is('xbox')) bg-green-400 @endif
                            @if(Request::is('nintendo')) bg-red-400 @endif">
    <div class=" max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between flex-wrap">
        <div class="w-0 flex-1 flex items-center">
            <span class="flex p-2 rounded-lg bg-gray-800">
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                </svg>
            </span>
            <p class="ml-3 font-medium text-white truncate">
                <span class="md:hidden">
                    Figyelem! Az oldal béta fázisban működik!
                </span>
                <span class="hidden md:inline">
                    Figyelem! Az oldal jelenleg béta állapotban használható.
                </span>
            </p>
        </div>
    </div>
</div>
</div>