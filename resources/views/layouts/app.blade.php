<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        <wireui:scripts />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-base-100">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow">
                    <div class="max-w-full px-4 pt-20 pb-6 mx-auto border-t-2 border-white sm:px-6 lg:px-8 bg-base-300">
                        <div class="px-4 mx-auto max-w-7xl">
                            {{ $header }}
                        </div>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class='min-h-screen'>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
