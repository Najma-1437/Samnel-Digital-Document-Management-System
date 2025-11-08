<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Document Manager') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Header / Navbar -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
            <div class="flex items-center space-x-4">
                <!-- Logo -->
                <img src="{{ asset('images/logo.png') }}" alt="Samnel Insurance Brokers" class="h-10 w-auto">
                <h1 class="text-xl font-bold text-gray-800">Samnel Insurance Brokers LTD</h1>
            </div>

            <nav class="space-x-4">
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
                <a href="{{ route('documents.index') }}" class="text-gray-700 hover:text-blue-600">Documents</a>
                <a href="{{ route('profile.edit') }}" class="text-gray-700 hover:text-blue-600">Profile</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">Logout</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <div class="bg-gray-50 shadow-sm">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            @yield('header')
        </div>
    </div>

    <!-- Page Content -->
    <main class="py-6">
        @yield('content')
    </main>

</body>
</html>

