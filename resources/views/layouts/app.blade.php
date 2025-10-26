<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mathakeng Group Technology - IT Consulting & Industrial Automation')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logos/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @stack('styles')
</head>
<body class="@yield('body-class', 'bg-slate-50')">
    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-md shadow-lg fixed w-full top-0 z-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/logos/logo.svg') }}" alt="Mathakeng Group" class="h-10 w-auto">
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="@if(request()->is('/')) text-slate-900 @else text-slate-500 @endif hover:text-cyan-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                    <a href="/about" class="@if(request()->is('about')) text-slate-900 @else text-slate-500 @endif hover:text-cyan-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">About</a>
                    <a href="/products" class="@if(request()->is('products')) text-slate-900 @else text-slate-500 @endif hover:text-cyan-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Products</a>
                    <a href="/services" class="@if(request()->is('services')) text-slate-900 @else text-slate-500 @endif hover:text-cyan-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Services</a>
                    <a href="/contact" class="@if(request()->is('contact')) text-slate-900 @else text-slate-500 @endif hover:text-cyan-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-slate-900 to-slate-800 text-white py-16 relative overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="mb-4">
                        <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-3 rounded-lg inline-block shadow-lg">
                            <img src="{{ asset('images/logos/logo.svg') }}" alt="Mathakeng Group" class="h-10 w-auto">
                        </div>
                    </div>
                    <p class="text-slate-300 mb-6">
                        Leading IT consulting and industrial automation solutions for modern businesses.
                    </p>
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center hover:scale-110 transition-transform duration-300">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </div>
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg flex items-center justify-center hover:scale-110 transition-transform duration-300">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center hover:scale-110 transition-transform duration-300">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6 text-cyan-300">Products</h4>
                    <ul class="space-y-3">
                        <li><a href="/products" class="text-slate-300 hover:text-cyan-400 transition-colors duration-300 flex items-center">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></div>
                            Safleet
                        </a></li>
                        <li><a href="/products" class="text-slate-300 hover:text-cyan-400 transition-colors duration-300 flex items-center">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></div>
                            Creche Assist
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6 text-blue-300">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="/services" class="text-slate-300 hover:text-blue-400 transition-colors duration-300 flex items-center">
                            <div class="w-2 h-2 bg-blue-400 rounded-full mr-3"></div>
                            IT Consulting
                        </a></li>
                        <li><a href="/services" class="text-slate-300 hover:text-blue-400 transition-colors duration-300 flex items-center">
                            <div class="w-2 h-2 bg-blue-400 rounded-full mr-3"></div>
                            Industrial Automation
                        </a></li>
                        <li><a href="/services" class="text-slate-300 hover:text-blue-400 transition-colors duration-300 flex items-center">
                            <div class="w-2 h-2 bg-blue-400 rounded-full mr-3"></div>
                            Custom Development
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6 text-purple-300">Contact</h4>
                    <ul class="space-y-3">
                        <li><a href="/contact" class="text-slate-300 hover:text-purple-400 transition-colors duration-300 flex items-center">
                            <div class="w-2 h-2 bg-purple-400 rounded-full mr-3"></div>
                            Get in Touch
                        </a></li>
                        <li><a href="/about" class="text-slate-300 hover:text-purple-400 transition-colors duration-300 flex items-center">
                            <div class="w-2 h-2 bg-purple-400 rounded-full mr-3"></div>
                            About Us
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-slate-400 mb-4 md:mb-0">&copy; 2024 Mathakeng Group Technology. All rights reserved.</p>
                    <div class="flex space-x-6 text-slate-400">
                        <a href="#" class="hover:text-cyan-400 transition-colors duration-300">Privacy Policy</a>
                        <a href="#" class="hover:text-cyan-400 transition-colors duration-300">Terms of Service</a>
                        <a href="#" class="hover:text-cyan-400 transition-colors duration-300">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
