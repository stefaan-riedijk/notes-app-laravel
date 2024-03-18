<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto mt-5 bg-red-200">
        <h3 class="text-3xl text-center">{{ Str::ucfirst($note->title) }}</h3>
        <div>
            <p>
                {{ $note->body }}</p>
        </div>
    </div>
</x-app-layout>
