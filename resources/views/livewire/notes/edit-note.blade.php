<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Post;

new #[Layout('layouts.app')] class extends Component {
    public Post $note;
    public $noteTitle;
    public $noteBody;
    public $noteIsPublished;
    public $recipient;

    public function mount(Post $note)
    {
        $this->noteTitle = $note->title;
        $this->noteBody = $note->body;
        $this->noteIsPublished = $note->is_published;
    }

    public function saveNote()
    {
        $this->validate([
            'noteTitle' => ['required', 'min:10'],
            'noteBody' => ['required', 'min:20'],
        ]);

        $this->note->title = $this->noteTitle;
        $this->note->body = $this->noteBody;
        $this->note->is_published = $this->noteIsPublished;
        $this->note->save();

        return redirect()->route('notes');
    }
}; ?>

<div class="py-20">
    <div class="mx-5 bg-blue-300 rounded-lg min-h-80 max-w-7xl xl:mx-auto">
        <h1 class="text-center">
            Edit your note!
        </h1>
        <form class="mx-8">
            <x-input label="Title" wire:model="noteTitle"/>
            <x-textarea label="Body" wire:model="noteBody"/>
            <div class="mt-8">
                <x-checkbox Label="Public" wire:model="noteIsPublished"/>
            </div>
            <div class="mx-auto w-fit">
                <x-wui-button primary label="Drerrie" class="ml-auto mr-6" wire:click="saveNote"/>
            </div>
        </form>
    </div>
    <div class="text-3xl text-black">Grote maccie</div>
</div>
