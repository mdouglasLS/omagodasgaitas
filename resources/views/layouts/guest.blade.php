<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{url('storage/images/favicon/favicon.ico')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-zinc-950">
<main class="min-h-screen flex flex-col justify-center items-center px-3 sm:px-0">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-neutral-900 shadow dark:shadow-zinc-900 overflow-hidden rounded-md">
        <div class="mb-5">
            <a href="{{ route('home') }}" class="flex justify-center">
                <x-logo class="w-20 fill-current text-gray-500"/>
            </a>
        </div>
        {{ $slot }}
    </div>
</main>

<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
</body>
</html>
