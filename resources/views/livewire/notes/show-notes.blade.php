<?php

use Livewire\Volt\Component;
use App\Models\Post;
use Carbon\Carbon;

new class extends Component {
    public $status = 'All';
    public $notes;

    public function updateNotes()
    {
        $this->notes = $this->getNotes();
    }
    private function getNotes()
    {
        if ($this->status == 'All') {
            return Post::all();
        } elseif ($this->status == 'Public') {
            return Post::where('is_published', 1)->get();
        } elseif ($this->status == 'Private') {
            return Post::where('is_published', 0)->get();
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
    <div class="flex px-5" x-data="{ open: false }">

        <div class="flex mr-4 space-x-3">

            <x-native-select class="" label="Select Note Status" placeholder="Select one status" wire:model="status">
                <option value="All">All</option>
                <option value="Public">Public</option>
                <option value="Private">Private</option>
            </x-native-select>
            <div>
                
                <x-native-select class="mt-auto" label="Sort By" placeholder="Select one status" wire:model="status">
                    <option value="All">All</option>
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                </x-native-select>
            </div>
        </div>
        <div class="content-center ml-auto">
            <x-wui-button.circle class="mr-5 bg-primary h-7 w-7" primary light icon="filter"
                wire:click="updateNotes" />
        </div>
    </div>
    <div class="grid gap-4 px-4 m-auto mt-12 md:grid-cols-3">
        @foreach ($notes as $note)
            <x-card class="relative border border-base-content bg-base-300" title="{{ $note->title }}"
                wire:key="{{ $note->id }}" padding="5">

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
                    <x-wui-button class="w-5 h-6 mr-5 text-secondary-content bg-secondary" icon="trash"
                        wire:click="delete('{{ $note->id }}')" />
                    <x-wui-button class="w-5 h-6 mr-5 text-secondary-content bg-secondary"
                        href="{{ route('notes.view', $note) }}" icon="eye" />
                    <x-wui-button class="w-5 h-6 mr-5 text-white bg-primary" href="{{ route('notes.edit', $note) }}"
                        icon="pencil" />
                </div>
            </x-card>
        @endforeach

    </div>

</div>
