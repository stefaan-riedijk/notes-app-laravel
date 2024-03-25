
    <div class="z-10 flex flex-row w-full p-6 border-b-2 border-base-content bg-base-300 drop-shadow-lg text-end sm:fixed sm:right-0 sm:top-0 min-h-14">
            <a href="{{ route('welcome') }}" wire:navigate class="border-black rounded-lg hover:border">
                <x-application-logo class="block w-auto text-gray-800 fill-current h-14" />
            </a>
        <div class="my-auto ml-auto">
                
                @auth
                <a class="text-2xl text-gray-600 align-baseline hover:underline font-font-semibold hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
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