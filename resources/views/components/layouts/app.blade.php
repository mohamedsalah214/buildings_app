<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page_title ?? 'Employees App' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Tailwind CSS */
            @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
        </style>
    @endif


</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-full bg-white ">

        <x-layouts.nav />

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
