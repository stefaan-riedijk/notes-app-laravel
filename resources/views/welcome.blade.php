<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @if (Route::has('login'))
        <div class="min-h-24">

            <livewire:welcome.navigation />
        </div>
    @endif
    <div class="container mx-6 max-w-fit">
        <div class="grid grid-cols-3 gap-6">

            <div class='max-w-lg text-center bg-slate-300 rounded-xl'>
                <h3 class="text-3xl font-bold">Pentify: your new favorite note sharing app!</h3>
                <x-application-logo></x-application-logo>
            </div>
            <section class="col-span-2 font-mono bg-slate-300 rounded-xl">

                <div class="container mx-auto bg-red-300 rounded-lg">
                    <h1 class="mb-5 text-3xl font-bold text-center">Zware maccie Halen</h1>
                </div>
                <div class="gap-4 mx-5 mb-6 font-mono">
                    <div class="pt-3 mx-auto bg-blue-300 rounded-md">
                        <div class="">
                            <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                        </div>
                        <div class='flex flex-row-reverse m-5'>
                            <x-wui-button class="text-xl" primary light wire:click="{{ route('notes') }}">Begin met
                                notities
                                schrijven</x-wui-button>
                        </div>
                    </div>
                    <div class="pt-3 mx-auto bg-blue-300 rounded-md">
                        <div class="">
                            <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                        </div>
                        <div class='flex flex-row-reverse m-5'>
                            <x-wui-button class="text-xl" primary light wire:click="{{ route('notes') }}"
                            wire:navigate>Get
                            started</x-wui-button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
            <section class="mx-5 font-mono align-top space-6 bg-slate-300">

                <div class="container mx-auto mt-6 bg-red-300 rounded-lg">
                    <h1 class="mb-5 text-3xl font-bold text-center">Zware maccie Halen</h1>
                </div>
                <div class="container grid gap-4 mx-5 mb-6 font-mono lg:grid-cols-2">
                    <div class="pt-3 mx-3 bg-blue-300 rounded-md p">
                        <div class="w-full">
                            <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                        </div>
                        <div class='flex flex-row-reverse m-5'>
                            <x-wui-button class="text-xl" primary light wire:click="{{ route('notes') }}">Begin met
                                notities
                                schrijven</x-wui-button>
                        </div>
                    </div>
                    <div class="pt-3 mx-3 bg-blue-300 rounded-md p">
                        <div class="w-full">
                            <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                        </div>
                        <div class='flex flex-row-reverse m-5'>
                            <x-wui-button class="text-xl" primary light wire:click="{{ route('notes') }}"
                                wire:navigate>Get
                                started</x-wui-button>
                        </div>
                    </div>
                </div>
            </section>
        <div class="p-6 space-y-5 mx-au to h-2/3 max-w-7xl lg:p-8">
            <div class="flex justify-center my-3">

            </div>
        </div>
    </div>
</body>

</html>
