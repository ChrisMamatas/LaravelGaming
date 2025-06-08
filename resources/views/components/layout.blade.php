<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title>Laravel</title>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <nav>
            <x-nav-link href="/" class="{{ request()->is('/') ? 'text-red-400' : 'text-green-500' }}">Home</x-nav-link>
            <x-nav-link href="/about">About</x-nav-link>
            <x-nav-link href="/contact">Contact</x-nav-link>
        </nav>

        {{ $slot }}

    </body>
</html>
 