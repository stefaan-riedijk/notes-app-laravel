<x-guest-layout>
        @if (Route::has('login'))
            <livewire:welcome.navigation />
    @endif
    <div class="max-w-6xl text-3xl font-semibold align-middle bg-base-300">Unfortunately, the page you requested was not found!</div>
</x-guest-layout>