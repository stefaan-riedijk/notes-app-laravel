<?php

use Livewire\Volt\Component;
use App\Models\Post;
use Carbon\Carbon;

new class extends Component {
    public function delete($noteId) {
        Post::destroy($noteId);
    }
    public function with(): array
    {
        return [
            'notes' => Post::orderBy('created-at')->get(),
        ];
    }
}; ?>

<div class="grid gap-4 px-4 m-auto mt-12 md:grid-cols-3">
    @foreach ($notes as $note)
        <x-card title="{{ ucfirst($note->title) }}" wire:key='{{ $note->id }}' padding="5" class="relative">
            <div class="p-5">
                <div class="mb-6 overflow-hidden max-h-15">
                    {{ Str::limit($note->body, 180 )}}
                </div>
                <div class="absolute bottom-2">
                    {{ Carbon::parse($note->created_at )->format('d M Y')}}
                </div>
            </div>
            <div class="absolute flex justify-end w-full mx-2 bottom-2">
                <x-wui-button icon="trash" wire:click="delete('{{$note->id}}')" class="w-5 h-6 mr-5"/>
            </div>
        </x-card>
    @endforeach
</div>
