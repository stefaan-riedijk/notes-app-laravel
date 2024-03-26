<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl px-4 py-2 mx-auto mt-8 rounded-lg bg-base-200 min-h-44">
        <h3 class="text-3xl text-center">{{ Str::ucfirst($note->title) }}</h3>
        <div class="mt-3">
            <p>
                {{ $note->body }}</p>
        </div>
    </div>
</x-app-layout>
