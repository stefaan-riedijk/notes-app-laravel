<x-guest-layout>
        @if (Route::has('login'))
            <livewire:welcome.navigation />
    @endif
    <div class="max-w-6xl text-3xl font-semibold align-middle bg-base-300">Unfortunately, you don't have the proper credentials to view this page. You can try making your note public!</div>
</x-guest-layout>