<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <title>{{ config('app.name', 'Daily Ledger') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8f19efb5ed.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-body box-border">
        <header class="md:flex items-center border-b border-gray-600">
            <div class="p-2">
                <i class="fad fa-books fa-3x"></i>
                <span class="font-body font-black text-5xl">Daily Ledger</span>
            </div>
            @guest
            <div class="flex-1">
                <form 
                    method="post"
                    action="{{ route('doLogin') }}"
                    class="md:flex justify-end items-center p-2"
                >
                    @csrf
                    <x-form.input placeholder="email" name="email" type="email" class="border-gray-600 md:w-1/4" />
                    <x-form.input placeholder="password" name="password" type="password" class="border-gray-600 md:w-1/4"/>
                    <x-button.submit class="bg-gray-100 border-gray-600 text-gray-600 block w-100">Login</x-button.submit>
                    <x-button.link class="" href="{{ route('register') }}">Register</x-button.link>
                    <x-button.link class="" href="{{ route('password.request') }}">Lost Password?</x-button.link>
                </form>
            </div>
            @endguest
        </header>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
