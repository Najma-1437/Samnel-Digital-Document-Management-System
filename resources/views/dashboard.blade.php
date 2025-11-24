<x-app-layout>
    
    <div class="py-8 px-4 md:px-8 lg:px-12 bg-gradient-to-br from-slate-100 via-slate-50 to-blue-100 min-h-screen">

        <!-- Welcome Section with Modern Gradient -->
        <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-600 text-white p-10 rounded-2xl shadow-xl mb-8">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -ml-24 -mb-24"></div>
            <div class="relative z-10">
                <div class="inline-block bg-white bg-opacity-20 rounded-full px-4 py-1 text-sm font-medium mb-4">
                    Insurance Portal
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-3 leading-tight">Welcome Back! 👋</h1>
                <p class="text-lg md:text-xl opacity-95 max-w-2xl">
                    Manage your insurance documents seamlessly and track your claims in real-time.
                </p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border-l-4 border-blue-500">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wide">Documents</h3>
                    <span class="text-2xl">📄</span>
                </div>
                <p class="text-3xl font-bold text-gray-800">Secure Storage</p>
                <p class="text-gray-600 text-sm mt-1">All files encrypted</p>
            </div>

            <div class="bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border-l-4 border-indigo-500">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wide">Processing</h3>
                    <span class="text-2xl">⚡</span>
                </div>
                <p class="text-3xl font-bold text-gray-800">Fast Updates</p>
                <p class="text-gray-600 text-sm mt-1">Real-time status</p>
            </div>

            <div class="bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border-l-4 border-purple-500">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wide">Support</h3>
                    <span class="text-2xl">💬</span>
                </div>
                <p class="text-3xl font-bold text-gray-800">24/7 Available</p>
                <p class="text-gray-600 text-sm mt-1">Always here to help</p>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            
            <!-- How to File a Claim - Takes 2 columns -->
            <div class="lg:col-span-2 bg-slate-50 rounded-2xl shadow-sm p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <span class="text-2xl">📋</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">How to File a Claim</h2>
                </div>

                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-500 text-white rounded-full flex items-center justify-center font-bold shadow-md">
                            1
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Upload Required Documents</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Navigate to the <strong>Documents</strong> section and upload essential files including National ID, receipts, police abstract, and photos.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-500 text-white rounded-full flex items-center justify-center font-bold shadow-md">
                            2
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Submit Your Claim</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Follow the instructions provided by your insurance provider to officially submit your claim for processing.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 text-white rounded-full flex items-center justify-center font-bold shadow-md">
                            3
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Track & Update</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Keep your documents current and monitor your claim status for a smooth approval process.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-blue-50 rounded-xl border border-blue-100">
                    <p class="text-sm text-blue-800 flex items-start gap-2">
                        <span class="text-lg">💡</span>
                        <span><strong>Pro tip:</strong> Ensure all documents are clear and legible before uploading to speed up the review process.</span>
                    </p>
                </div>
            </div>

            <!-- What We Offer - Sidebar -->
            <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl shadow-sm p-8 text-white">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                        <span class="text-2xl">✨</span>
                    </div>
                    <h2 class="text-2xl font-bold">What We Offer</h2>
                </div>

                <div class="space-y-5">
                    <div class="flex items-start gap-3 bg-white bg-opacity-10 rounded-xl p-4 backdrop-blur-sm">
                        <span class="text-2xl flex-shrink-0">🔒</span>
                        <div>
                            <h4 class="font-semibold mb-1">Secure Storage</h4>
                            <p class="text-sm opacity-90">Bank-level encryption for all your insurance files.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 bg-white bg-opacity-10 rounded-xl p-4 backdrop-blur-sm">
                        <span class="text-2xl flex-shrink-0">🎯</span>
                        <div>
                            <h4 class="font-semibold mb-1">Easy Guidance</h4>
                            <p class="text-sm opacity-90">Step-by-step instructions for every claim type.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 bg-white bg-opacity-10 rounded-xl p-4 backdrop-blur-sm">
                        <span class="text-2xl flex-shrink-0">⚡</span>
                        <div>
                            <h4 class="font-semibold mb-1">Real-Time Updates</h4>
                            <p class="text-sm opacity-90">Instant notifications on your claim status.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- My Documents -->
            <a href="{{ route('documents.index') }}"
               class="group bg-slate-50 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-blue-200">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="text-3xl">📁</span>
                    </div>
                    <svg class="w-6 h-6 text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">My Documents</h3>
                <p class="text-gray-600 leading-relaxed">Upload, organize, and manage all your insurance-related documents in one secure place.</p>
            </a>

            <!-- Support -->
            <a href="#"
               class="group bg-slate-50 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-indigo-200">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="text-3xl">🆘</span>
                    </div>
                    <svg class="w-6 h-6 text-gray-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">Need Help?</h3>
                <p class="text-gray-600 leading-relaxed">Our support team is available 24/7 to assist you with any questions or concerns.</p>
            </a>

        </div>

    </div>
</x-app-layout>