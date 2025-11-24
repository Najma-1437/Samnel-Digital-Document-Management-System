<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samnel Insurance Brokers - Digital Claims Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #0ea5e9 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-700 to-cyan-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-shield-alt text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-700 to-cyan-600 bg-clip-text text-transparent">
                        Samnel Insurance
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-700 hover:text-blue-600 font-medium transition">Features</a>
                    <a href="#how-it-works" class="text-gray-700 hover:text-blue-600 font-medium transition">How It Works</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700 font-medium transition">Sign In</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg pt-24 pb-20 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Digital Insurance Claims Made Simple
                    </h1>
                    <p class="text-xl mb-8 text-blue-100">
                        File claims, track status, and communicate with your broker all in one secure platform. Say goodbye to paperwork and hello to efficiency.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('register') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition text-center shadow-xl">
                            <i class="fas fa-user-plus mr-2"></i>Get Started Free
                        </a>
                        <a href="{{ route('login') }}" class="glass-effect text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:bg-opacity-20 transition text-center">
                            <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                        </a>
                    </div>
                    <div class="mt-8 flex items-center space-x-6 text-blue-100">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            <span>No credit card required</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-lock mr-2"></i>
                            <span>Secure & Encrypted</span>
                        </div>
                    </div>
                </div>
                <div class="relative animate-float hidden md:block">
                    <div class="glass-effect rounded-2xl p-8 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=400&fit=crop" 
                             alt="Insurance Document" 
                             class="rounded-lg shadow-lg mb-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold">Claim Approved</p>
                                    <p class="text-blue-200 text-sm">Processing payment...</p>
                                </div>
                            </div>
                            <span class="text-green-400 text-2xl font-bold">$5,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Everything You Need</h2>
                <p class="text-xl text-gray-600">Powerful features for modern insurance claims management</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-file-upload text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Easy Claims Filing</h3>
                    <p class="text-gray-600">Submit claims in minutes with our intuitive form. Upload photos and documents directly from your device.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift border border-gray-100">
                    <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-cyan-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Real-Time Tracking</h3>
                    <p class="text-gray-600">Know exactly where your claim stands. Get instant updates and notifications at every stage.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift border border-gray-100">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-comments text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Direct Communication</h3>
                    <p class="text-gray-600">Chat directly with your assigned broker. No more phone tag or waiting for email responses.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-shield text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Assigned Officer</h3>
                    <p class="text-gray-600">Each claim gets a dedicated insurance officer. See their profile and contact information.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift border border-gray-100">
                    <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-lock text-cyan-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Secure Storage</h3>
                    <p class="text-gray-600">All your documents are encrypted and securely stored. Access them anytime, anywhere.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-history text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Complete History</h3>
                    <p class="text-gray-600">Access all your past claims, documents, and communications in one organized dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">How It Works</h2>
                <p class="text-xl text-gray-600">Get started in 3 simple steps</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-700 to-cyan-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                        1
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Create Account</h3>
                    <p class="text-gray-600">Sign up in seconds with just your email. No lengthy forms or paperwork required.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-700 to-cyan-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                        2
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">File Your Claim</h3>
                    <p class="text-gray-600">Fill out our simple claim form and upload supporting documents. Takes less than 5 minutes.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-700 to-cyan-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                        3
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Track & Communicate</h3>
                    <p class="text-gray-600">Monitor your claim status in real-time and chat with your broker whenever needed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-bg py-20">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Go Digital?</h2>
            <p class="text-xl text-blue-100 mb-8">Join hundreds of clients already managing their claims digitally</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition shadow-xl">
                    Start Free Today
                </a>
                <a href="#contact" class="glass-effect text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:bg-opacity-20 transition">
                    Contact Sales
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-700 to-cyan-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                        <span class="text-xl font-bold text-white">Samnel Insurance</span>
                    </div>
                    <p class="text-gray-400">Making insurance claims simple, fast, and transparent.</p>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-400 transition">About Us</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Careers</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Press</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-400 transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">FAQs</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li><i class="fas fa-phone mr-2"></i> +254 700 000 000</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@samnel.co.ke</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Nairobi, Kenya</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p>&copy; 2024 Samnel Insurance Brokers Ltd. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>