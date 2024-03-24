<?php

use Livewire\Volt\Component;
use App\Models\Post;
use Carbon\Carbon;

new class extends Component {
    public $status;
    public $notes;

    public function updating($property, $value)
    {
        if ($value == 'All') {
            return view('livewire.notes.show-notes', [
                'notes' => Post::all(),
            ]);
        } elseif ($value == 'Public') {
            $this->notes = Post::where('is_published', 1)->get();
            $this->emit('refreshC');
        } elseif ($value == 'Private') {
            return view('livewire.notes.show-notes', [
                'notes' => Post::where('is_published', 0)->get(),
                d,
            ]);
        }
    }

    public function delete($noteId)
    {
        Post::destroy($noteId);
    }

    public function mount()
    {
        $this->notes = Post::all();
    }
}; ?>

<div>
    <div class="flex" x-data="{ open: false }">

        <div class="" :class="{ 'hidden': !open, 'inline-flex': open }">
            <x-native-select label="Select Status" placeholder="Select one status" wire:model="status">
                <option value="All">All</option>
                <option value="Public">Public</option>
                <option value="Private">Private</option>
            </x-native-select>
            <x-wui-button class="mx-auto text-xl" primary light wire:click="uit">Filter</x-wui-button>
        </div>
        <div class="ml-auto">
            <x-wui-button.circle class="w-5 h-5 mr-5" primary icon="filter" @click="open = ! open" />
        </div>
    </div>
    <div class="grid gap-4 px-4 m-auto mt-12 md:grid-cols-3">
        @foreach ($notes as $note)
            <x-card class="relative bg-blue-200 border-2" title="{{ ucfirst($note->title) }}" wire:key='{{ $note->id }}'
                padding="5">

                <a href="{{ route('notes.edit', $note) }}">
                    <div class="p-5">
                        <div class="mb-6 overflow-hidden max-h-15">
                            {{ Str::limit($note->body, 180) }}
                        </div>
                        <div class="absolute bottom-2">
                            {{ Carbon::parse($note->created_at)->format('d M Y') }}
                        </div>
                    </div>
                </a>
                <div class="absolute flex justify-end w-full mx-2 bottom-2">
                    <x-wui-button class="w-5 h-6 mr-5" icon="trash" wire:click="delete('{{ $note->id }}')" />
                    <x-wui-button class="w-5 h-6 mr-5" href="{{ route('notes.view', $note) }}" icon="eye" />
                    <x-wui-button class="w-5 h-6 mr-5" href="{{ route('notes.edit', $note) }}" icon="pencil" />
                </div>
            </x-card>
        @endforeach

    </div>
</div>
