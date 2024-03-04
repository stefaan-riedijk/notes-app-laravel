<?php

use Livewire\Volt\Component;
use App\Models\Post;

new class extends Component {
    public function with(): array 
    {
        return [
            'notes' => Post::orderBy('created-at')->get()
        ];
    }
}; ?>

<div class="grid gap-4 px-4 m-auto mt-12 md:grid-cols-3">
    @foreach ($notes as $note)
    <x-card wire:key='{{ $note->id}}' title="{{$note->title}}" padding="5" class="">
    <div class="p-5">
       <div>
        {{$note->body}}
        </div>
        <div>
        {{$note->created_at}}
        </div>
    </div>
    </x-card>
    @endforeach
</div>