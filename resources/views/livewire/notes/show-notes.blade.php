<?php

use Livewire\Volt\Component;
use App\Models\Post;
use Carbon\Carbon;

new class extends Component {
    public $notes;

    public $status = 'All';
    public $sortOptions = 'updated_at DESC';

    public function updateNotes()
    {
        $this->notes = $this->getNotes();
    }

    private function getNotes()
    {
        if ($this->status == 'All') {
            return Post::where('user_id', auth()->user()->id)
                ->orderByRaw($this->sortOptions)
                ->get();
        } elseif ($this->status == 'Public') {
            return Post::where('user_id', auth()->user()->id)
                ->where('is_published', 1)
                ->orderByRaw($this->sortOptions)
                ->get();
        } elseif ($this->status == 'Private') {
            return Post::where('user_id', auth()->user()->id)
                ->where('is_published', 0)
                ->orderByRaw($this->sortOptions)
                ->get();
        }
    }

    public function delete($noteId)
    {
        Post::destroy($noteId);
        $this->notes = Post::all();
    }

    public function mount()
    {
        $this->notes = Post::where('user_id', auth()->user()->id)->get();
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

                <x-native-select class="mt-auto" label="Sort By" placeholder="Select one status"
                    wire:model="sortOptions">
                    <option value="title">Alphabetically</option>
                    <option value="updated_at DESC">Last Updated, Descending</option>
                    <option value="updated_at ASC">Last Updated, Ascending</option>
                </x-native-select>
            </div>
        </div>
        <div class="content-center ml-auto">
            <x-wui-button.circle class="mr-5 bg-primary h-7 w-7" primary light icon="filter"
                wire:click="updateNotes" />
        </div>
    </div>
    <div class="grid gap-4 px-4 m-auto mt-12 sm:grid-cols-2 md:grid-cols-3">
        @foreach ($notes as $note)
            <x-card class="relative border border-base-content bg-base-300" title="{{ ucfirst($note->title) }}"
                wire:key="{{ $note->id }}" padding="5">
                <div class='flex flex-row pt-2 pl-3 pr-2'>
                    @if ($note->is_published == true)
                        <x-badge outline secondary label="Public" />
                    @else
                        <x-badge outline secondary label="Private" />
                    @endif
                    <div class='ml-auto'>
                        <x-wui-dropdown class="" position="bottom-right">
                            <x-wui-dropdown.item label="Settings" />
                        </x-wui-dropdown>
                    </div>
                </div>
                <a href="{{ route('notes.edit', $note) }}">
                    <div class="p-5">
                        <div class="mb-6 overflow-hidden max-h-15">
                            {{ Str::limit(ucfirst($note->body), 180) }}
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
