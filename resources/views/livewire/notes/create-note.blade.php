<?php

use Livewire\Volt\Component;
use App\Models\Category;
use App\Models\Post;

new class extends Component {
    public Post $note;
    public $selectedCategory;
    public $noteTitle;
    public $noteBody;
    public $noteIsPublished = false;

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function submit()
    {
        $validate = $this->validate([
            'noteTitle' => ['required', 'min:10'],
            'noteBody' => ['required', 'min:20'],
        ]);

        $post = auth()
            ->user()
            ->posts()
            ->create([
                'title' => $this->noteTitle,
                'body' => $this->noteBody,
                'is_published' => $this->noteIsPublished,
                'category_id' => $this->selectedCategory,
            ]);
        if ($this->selectedCategory !== null) {
            $post->category()->associate(Category::where('id', $this->selectedCategory)->get());
            $post->save();
        }
        dd($post);
    }
}; ?>

<div class="">
    <form class="space-3" wire:submit="submit">
        <x-input wire:model="noteTitle" label="Title" placeholder="What do you want to write about?" />
        <x-textarea wire:model="noteBody" label="Body" placeholder="Start typing your message here!" />
        <x-input label="Recipient" placeholder="friend@example.com" />
        <div class="mt-3">
            <x-checkbox wire:model="noteIsPublished" label="Publish" />
        </div>
        <x-select label="Select Category" placeholder="Select a category" :async-data="route('api.categories.index')" option-label="name"
            option-value="id" wire:model='selectedCategory' />
        <x-errors />
        <div class="pt-6">
            <x-wui-button light blue label="Submit" wire:click="submit" right-icon="plus" />
            <x-wui-button light blue label="Submit Test" wire:click="submitTest" right-icon="plus" />
        </div>
    </form>
</div>
