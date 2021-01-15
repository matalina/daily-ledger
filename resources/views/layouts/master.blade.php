<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-screen">
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
    <body class="font-body box-border h-screen flex flex-col">
        <header class="md:flex items-center border-b border-gray-600 mb-5">
            <div class="p-2">
                <a href="{{ route('home') }}">
                    <i class="fad fa-books fa-3x"></i>
                    <span class="font-body font-black text-5xl">Daily Ledger</span>
                </a>
            </div>
            <div class="flex-1">
            @guest
                <form 
                    method="post"
                    action="{{ route('doLogin') }}"
                    class="md:flex justify-end items-center p-2"
                >
                    @csrf
                    <x-form.input placeholder="email" name="email" type="email" class="border-gray-600 md:w-1/4" />
                    <x-form.input placeholder="password" name="password" type="password" class="border-gray-600 md:w-1/4"/>
                    <x-button.submit class="bg-gray-100 border-gray-600 text-gray-600">Login</x-button.submit>
                    <x-button.link class="" href="{{ route('register') }}">Register</x-button.link>
                    <x-button.link class="" href="{{ route('password.request') }}">Lost Password?</x-button.link>
                </form>
            @endguest
            @auth
                <nav class="md:flex justify-end items-center p-2 text-center">
                    <x-button.link href="{{ route('dashboard') }}">
                        <i class="fad fa-tachometer-slow fa-fw"></i>
                        <span class="hidden md:inline">Dashboard</span>
                    </x-button.link>
                    <x-button.link href="{{ route('dashboard.calendar') }}">
                        <i class="fad fa-calendar-alt fa-fw"></i>
                        <span class="hidden md:inline">Calendar</span>
                    </x-button.link>
                    <x-button.link  href="{{ route('dashboard.tasks') }}">
                        <i class="fad fa-tasks fa-fw"></i> 
                        <span class="hidden md:inline">Tasks</span>
                    </x-button.link>
                    <x-button.link href="{{ route('dashboard.habits') }}">
                        <i class="fad fa-tasks-alt fa-fw"></i> 
                        <span class="hidden md:inline">Habits</span>
                    </x-button.link>
                    <x-button.link href="{{ route('dashboard.notes') }}">
                        <i class="fad fa-clipboard fa-fw"></i> 
                        <span class="hidden md:inline">Notes</span>
                    </x-button.link>
                    <x-button.link href="{{ route('settings') }}">
                        <i class="fad fa-cog fa-fw"></i>
                        <span class="hidden md:inline">Settings</span>
                    </x-button.link>
                    <x-button.form action="{{ route('logout') }}" method="post">
                        <i class="fad fa-sign-out fa-fw"></i> 
                        <span class="hidden md:inline">Logout</span>
                    </x-button.form>
                </div>   
            @endauth
            </nav>
        </header>
        <main class="flex-grow">
            {{ $slot }}
        </main>
        <footer class="border-t border-gray-600 mt-5 p-2">
            Footer
        </footer>
    </body>
</html>
