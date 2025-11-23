<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Document Manager') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Header / Navbar -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Samnel Insurance Brokers" class="h-10 w-auto">
                    <h1 class="text-lg sm:text-xl font-bold text-gray-800 truncate">Samnel Insurance Brokers LTD</h1>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                    <a href="{{ route('documents.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Documents</a>

                    <!-- Profile Dropdown -->
                    <div class="relative group">
                        <button
                            type="button"
                            class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 font-medium focus:outline-none"
                        >
                            <span>Account</span>
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity duration-150">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2">
                                @csrf
                                <button type="submit" class="w-full text-left text-sm text-red-600 hover:bg-red-50">Logout</button>
                            </form>
                        </div>
                    </div>
                </nav>

                <!-- Mobile Fallback: Show all links vertically (no dropdown) -->
                <nav class="md:hidden flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                    <a href="{{ route('documents.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Docs</a>
                    <a href="{{ route('profile.edit') }}" class="text-gray-700 hover:text-blue-600 font-medium">Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline font-medium">Logout</button>
                    </form>
                </nav>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            @yield('header')
        </div>
    </div>

    <!-- Page Content -->
    <main class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

</body>
</html>