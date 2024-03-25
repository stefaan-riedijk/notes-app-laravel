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
        <div class="grid gap-4 p-6 lg:grid-cols-3 md:grid-cols-2">

            <div class='max-w-lg mx-auto text-center shadow-lg rounded-xl bg-slate-300'>
                <div class="border-b-4 border-dashed bg-base-300 rounded-xl">
                    
                    <h3 class="px-3 pt-8 pb-6 text-4xl font-bold ">Pentify: your new favorite note sharing app!</h3>
                </div>
                <x-application-logo></x-application-logo>
            </div>
            <section class="font-mono lg:col-span-2 rounded-2xl bg-slate-300 text-secondary-content">

                <div class="items-center mx-auto mb-3 border-b-4 border-dashed rounded-t-2xl max-h-fit bg-base-300 justify-items-center min-h-fit">
                    <h1 class="px-3 py-6 text-4xl font-bold text-center place-self-center">Zware maccie Halen</h1>
                </div>
                <div class="mx-4 mb-6 font-mono h-fit x-5">
                    <div class="pt-3 mx-auto bg-blue-300 rounded-md shadow-lg">
                            <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                        
                        <div class='flex flex-row-reverse m-5'>
                            <x-wui-button class="mb-3 text-xl" blue light wire:click="{{ route('notes.index') }}">Begin met
                                notities
                                schrijven</x-wui-button>
                        </div>
                    </div>
                    <div class="hidden pt-3 mx-auto bg-blue-300 rounded-md md:block">
                        <div class="">
                            <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                        </div>
                        <div class='flex flex-row-reverse m-5'>
                            <x-wui-button class="mb-3 text-xl" blue light wire:click="{{ route('notes.index') }}"
                                wire:navigate>Get
                                started</x-wui-button>
                        </div>
                    </div>
                    <div class="grid gap-5 rounded-lg lg:grid-cols-3 mt-15">
                        <div class="col-span-1 px-3 py-2 pb-8 bg-blue-300 rounded-lg shadow-lg">
                            <x-icon name="pencil-alt" class="w-8 h-8 mx-auto my-2 border rounded-full"></x-icon>
                            <p class="align-middle">Ontketen je creativiteit en deel al jouw meest gekke ideeen met je vrienden! begin nu met schrijven en probeer het uit!</p>
                        </div>
                        <div class="col-span-1 px-3 py-2 bg-blue-300 rounded-lg shadow-lg">
                            <x-icon name="calendar" class="w-8 h-8 mx-auto my-2 border rounded-full"></x-icon>
                            <p>Maak je geen zorgen meer over de tijd waarop je de notities stuurt; je kan zelf beslissen wanneer deze aankomen bij de ontvanger!</p>
                        </div>
                        <div class="px-3 py-2 bg-blue-300 rounded-lg shadow-lg">
                            <x-icon name="chart-bar" class="w-8 h-8 mx-auto my-2 border rounded-full"></x-icon>
                            <p>Houd bij hoeveel notities je hebt verstuurd en krijg interessante feitjes te zien via je eigen dashboard!</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="px-6 pt-0.5 pb-2 mx-5 font-mono align-top space-6 bg-slate-300 rounded-xl">

            <div class="container justify-center px-4 mx-auto mt-6 rounded-lg bg-primary">
                <h1 class="py-3 mb-5 text-3xl font-bold text-center">Get started with note writing and sharing today!</h1>
            </div>
            <div class="container grid gap-4 mx-auto mb-6 font-mono lg:grid-cols-2">
                <div class="pt-3 mx-3 bg-blue-300 rounded-md shadow-xl">
                    <div class="w-full">
                        <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                    </div>
                    <div class='flex flex-row-reverse m-5'>
                        <x-wui-button class="text-xl" blue wire:click="{{ redirect()->route('notes.index') }}">Begin met
                            notities
                            schrijven</x-wui-button>
                    </div>
                </div>
                <div class="pt-3 mx-3 bg-blue-300 rounded-md shadow-xl">
                    <div class="w-full">
                        <h1 class="text-3xl font-semibold text-center">Share with friends</h1>
                    </div>
                    <div class='m-5'>
                        <x-wui-button class="mx-auto text-xl" light blue>Get
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
    <livewire:layout.footer></livewire:layout.footer>
</body>

</html>
