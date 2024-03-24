<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Post;

new #[Layout('layouts.app')] class extends Component {
    public Post $note;
    public $noteTitle;
    public $noteBody;
    public $noteIsPublished;

    public function mount(Post $note)
    {
        $this->note = $note;
        $this->noteTitle = $note->title;
        $this->noteBody = $note->body;
        $this->noteIsPublished = $note->is_published;
    }

    public function saveNote()
    {
        $validated = $this->validate([
            'noteTitle' => ['required', 'min:10'],
            'noteBody' => ['required', 'min:20'],
        ]);

        $this->note->update([
         'title' => $this->noteTitle, 
         'body' => $this->noteBody, 
         'is_published' => $this->noteIsPublished,   
    ]);

     $this->dispatch('note-saved');
    }
}; ?>

<div class="py-20">
    <div class='mx-auto my-3 max-w-7xl'>
        
        <x-wui-button class='' secondary href="{{ route('notes.index') }}">Back to view</x-wui-button>
    </div>
    <div class="mx-5 bg-blue-300 rounded-lg min-h-80 max-w-7xl xl:mx-auto">
        <h1 class="text-center">
            Edit your note!
        </h1>
        <form wire:submit='saveNote' class="mx-8">
            <x-input label="Title" wire:model="noteTitle"/>
            <x-textarea label="Body" wire:model="noteBody"/>
            <div class="mt-8">
                <x-checkbox Label="Public" wire:model="noteIsPublished"/>
            </div>
            <div class="flex mx-auto text-justify w-fit">
                <x-wui-button primary label="Save Changes" class="ml-auto mr-6" type="submit" spinner="saveNote"/>
                <x-action-message on="note-saved" class="mx-auto "/>
            </div>
        </form>
    </div>
</div>
