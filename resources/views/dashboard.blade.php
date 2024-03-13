<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg ">
                <div class="p-6 m-5 text-gray-900 bg-blue-300 rounded-md">
                    <p>Welcome back, {{ Str::of(auth()->user()->name)->explode(' ')->get(0)}}!</p>
                </div>
                <div class="p-6 m-5 text-gray-900 bg-blue-300 rounded-md">
                    <p>So far you have created {{ App\Models\Post::count() }} posts! Keep up the good work! </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
