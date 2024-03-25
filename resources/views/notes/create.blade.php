<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 ">
            {{ __('Notes') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="mx-auto mb-5 max-w-7xl pl-7">
            
            <x-wui-button class="btn btn-secondary" icon="arrow-left" secondary href="{{ route('notes.index') }}">Back to notes</x-wui-button>
        </div>
        <div class="px-6 mx-auto max-w-7xl">
            <div class="bg-blue-300 border-2 border-blue-800 rounded-lg ">
                
                <div class="p-6 overflow-hidden text-gray-900 shadow-sm sm:rounded-lg">
                    <livewire:notes.create-note />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
