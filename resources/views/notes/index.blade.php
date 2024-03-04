<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Notes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid justify-items-end">
                <div class="justify-self-end">
                    <x-wui-button.circle class="" href="{{ route('notes.create') }}" lg icon="plus" primary />
                </div>
            </div>
            <div class="grid grid-cols-3 px-6 bg-red-300">
            </div>
            <div class="shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:notes.show-notes />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
