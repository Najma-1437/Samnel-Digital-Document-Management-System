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

                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#7A758F] hover:bg-[#625E74] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#7A758F]">
                        Log in
                    </button>

                    <p class="mt-3 text-center text-sm">
                        <a href="{{ route('register') }}" class="text-black-600 hover:text--800 font-medium">
                            Don’t have an account? <span class="underline">Sign up</span>
                        </a>
                    </p>
                </form>
            </div>
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
