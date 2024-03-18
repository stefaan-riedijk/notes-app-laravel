<x-app-layout>
    <div class="py-12">
        
        <x-slot name="header" class="">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Notes') }}
            </h2>
        </x-slot>
        <div class="">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid justify-items-end">
                    <div class="mr-8 justify-self-end">
                        <x-wui-button class="" href="{{ route('notes.create') }}" lg icon="plus" primary >Create a new note </x-wui-button>
                    </div>
                </div>
                <div class="shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    <livewire:notes.show-notes />
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
