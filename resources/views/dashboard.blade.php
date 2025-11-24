<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('claims.create') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-700 to-cyan-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:shadow-lg transition">
                <i class="fas fa-plus mr-2"></i> New Claim
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Welcome Message -->
            <div class="bg-gradient-to-r from-blue-700 to-cyan-600 rounded-lg shadow-xl p-6 mb-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h3>
                        <p class="text-blue-100">Here's an overview of your insurance claims</p>
                    </div>
                    <div class="hidden md:block">
                        <i class="fas fa-shield-alt text-white text-6xl opacity-20"></i>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <!-- Total Claims -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 font-semibold uppercase">Total Claims</p>
                                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">0</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-file-alt text-blue-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 font-semibold uppercase">Pending</p>
                                <p class="text-3xl font-bold text-yellow-600 mt-2">0</p>
                            </div>
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock text-yellow-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Approved -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 font-semibold uppercase">Approved</p>
                                <p class="text-3xl font-bold text-green-600 mt-2">0</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-check-circle text-green-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rejected -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 font-semibold uppercase">Rejected</p>
                                <p class="text-3xl font-bold text-red-600 mt-2">0</p>
                            </div>
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-times-circle text-red-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Recent Claims -->
                <div class="lg:col-span-2">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    <i class="fas fa-list mr-2 text-blue-600"></i>Recent Claims
                                </h3>
                                <a href="{{ route('claims.index') }}" class="text-sm text-blue-600 hover:text-blue-700 font-semibold">
                                    View All <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>

                            <!-- Empty State -->
                            <div class="text-center py-12">
                                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-folder-open text-gray-400 text-3xl"></i>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No Claims Yet</h4>
                                <p class="text-gray-500 dark:text-gray-400 mb-4">Start by filing your first insurance claim</p>
                                <a href="{{ route('claims.create') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-700 to-cyan-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:shadow-lg transition">
                                    <i class="fas fa-plus mr-2"></i> File New Claim
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions & Info -->
                <div class="space-y-6">
                    
                    <!-- Quick Actions -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                                <i class="fas fa-bolt mr-2 text-yellow-500"></i>Quick Actions
                            </h3>
                            <div class="space-y-3">
                                <a href="{{ route('claims.create') }}" class="block p-4 bg-blue-50 hover:bg-blue-100 rounded-lg transition group">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-file-medical text-white"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900 group-hover:text-blue-600">File a Claim</p>
                                            <p class="text-xs text-gray-500">Submit new claim</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('documents.index') }}" class="block p-4 bg-green-50 hover:bg-green-100 rounded-lg transition group">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-folder text-white"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900 group-hover:text-green-600">My Documents</p>
                                            <p class="text-xs text-gray-500">View all documents</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('profile.edit') }}" class="block p-4 bg-purple-50 hover:bg-purple-100 rounded-lg transition group">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-user text-white"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900 group-hover:text-purple-600">Update Profile</p>
                                            <p class="text-xs text-gray-500">Manage account</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Help & Support -->
                    <div class="bg-gradient-to-br from-blue-700 to-cyan-600 overflow-hidden shadow-sm sm:rounded-lg text-white">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-2">
                                <i class="fas fa-question-circle mr-2"></i>Need Help?
                            </h3>
                            <p class="text-blue-100 text-sm mb-4">Our support team is here to assist you 24/7</p>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center">
                                    <i class="fas fa-phone mr-2"></i>
                                    <span>+254 700 000 000</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span>support@samnel.co.ke</span>
                                </div>
                            </div>
                            <a href="#" class="inline-block mt-4 px-4 py-2 bg-white text-blue-600 rounded-lg font-semibold text-xs hover:bg-blue-50 transition">
                                Contact Support
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</x-app-layout>