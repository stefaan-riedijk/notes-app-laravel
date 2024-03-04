<?php

use Livewire\Volt\Component;

new class extends Component {
    public $noteTitle;
    public $noteBody;

    public function submit()
    {
        $validate = $this->validate([
            'noteTitle' => ['required', 'min:10'],
            'noteBody' => ['required', 'min:20'],
        ]);

        auth()
            ->user()
            ->posts()
            ->create([
                'title' => $this->noteTitle,
                'body' => $this->noteBody,
                'is_published' => false,
            ]);

        redirect()->route('notes');
    }
}; ?>

<div>
    <form class="space-3" wire:submit="submit">
        <x-input wire:model="noteTitle" label="Title" placeholder="What do you want to write about?"/>
        <x-textarea wire:model="noteBody" label="Body" placeholder="Start typing your message here!"/>
        <x-input label="Recipient" placeholder="friend@example.com" />
        <div class="pt-6">
            <x-wui-button light primary label="Submit" wire:click="submit" right-icon="plus" />
        </div>
    </form>
</div>
