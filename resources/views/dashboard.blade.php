<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-row-reverse pr-4 mx-auto mb-3 max-w-7xl">    
                <x-wui-button light secondary right-icon="pencil-alt" class="justify-end btn btn-secondary" href="{{ route('notes.create') }}">Keep on writing!</x-wui-button>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg ">
                <div class="p-6 m-5 text-gray-900 rounded-md bg-base-300">
                    <p>Welcome back, {{ Str::of(auth()->user()->name)->explode(' ')->get(0)}}!</p>
                </div>
                <div class="p-6 m-5 text-gray-900 rounded-md bg-base-300">
                    <p>So far, you have created {{ App\Models\Post::where('user_id',auth()->user()->id)->count() }} posts! Keep up the good work! </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
