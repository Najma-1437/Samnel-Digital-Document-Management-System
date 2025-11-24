<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-50 py-12 px-4">
        <div class="w-full max-w-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" class="h-26 w-auto logo-animated">
            </div>

            <div class="bg-teal py-8 px-6 shadow-lg rounded-xl border border-white-200">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label class="block text-sm font-medium text-gray-700" for="email">Email address</label>
                    <input id="email" name="email" type="email" required autofocus
                        class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-blue-500">

                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                        <input id="password" name="password" type="password" required
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-blue-500">
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="remember"
                                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                            <span class="text-sm text-gray-900">Remember me</span>
                        </label>
                        <div class="auth-footer text-center mt-4">

                            <a href="{{ route('password.request') }}"
                                class="text-sm text-black-600 hover:dusty-purple-500">
                                Forgot your password?
                            </a>
                        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </div>
</x-guest-layout>


<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .logo-animated {
        animation: fadeInUp 0.8s ease-out;
    }
</style>


<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .logo-animated {
        animation: fadeInUp 0.8s ease-out;
    }

    /* Normal links */
    a {
        color: #b38ddb;
        /* lavender-like theme – change to your color */
        text-decoration: none;
    }

    /* Hover (match theme background instead of blue) */
    a:hover {
        color: #d5b6ff;
        /* lighter variant of your theme */
    }

    /* Auth footer section for small links */
    .auth-footer a {
        font-size: 0.9rem;
    }
</style>
