<div class="flex">
    <div class="flex items-center shrink-0">
        <a href="{{ route('welcome') }}" wire:navigate>
            <x-application-logo class="block w-auto h-10 text-gray-800 fill-current" />
        </a>
    </div>
    <div class="z-10 w-full p-6 bg-blue-400 text-end sm:fixed sm:right-0 sm:top-0">
        @auth
            <a class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
                href="{{ url('/dashboard') }}" wire:navigate>Dashboard</a>
        @else
            <a class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
                href="{{ route('login') }}" wire:navigate>Log in</a>

            @if (Route::has('register'))
                <a class="font-semibold text-gray-600 ms-4 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
                    href="{{ route('register') }}" wire:navigate>Register</a>
            @endif
        @endauth
    </div>

</div>
