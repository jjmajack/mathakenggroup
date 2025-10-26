@extends('layouts.app')

@section('title', 'Our Products - Mathakeng Group Technology')
@section('body-class', 'bg-white')

@push('styles')
<style>
    @keyframes bounce-slow {
        0%, 100% {
            transform: translateY(-25%);
            animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
        }
        50% {
            transform: translateY(0);
            animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
    }
    
    @keyframes pulse-slow {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
    
    .animate-bounce-slow {
        animation: bounce-slow 3s infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 3s infinite;
    }
</style>
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="pt-16 bg-gradient-to-br from-slate-900 via-blue-900 to-cyan-900 text-white relative overflow-hidden min-h-screen flex items-center">
        <!-- Animated background elements -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        
        <!-- Floating geometric shapes -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-20 h-20 bg-cyan-500/10 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-blue-500/10 rounded-lg rotate-45 animate-bounce"></div>
            <div class="absolute bottom-40 left-20 w-24 h-24 bg-purple-500/10 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-12 h-12 bg-pink-500/10 rounded-lg rotate-12 animate-bounce"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative w-full">
            <div class="text-center">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                    <div class="w-2 h-2 bg-cyan-400 rounded-full mr-3 animate-pulse"></div>
                    <span class="text-cyan-300 text-sm font-medium">💡 Our Innovation Portfolio</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white via-cyan-100 to-blue-100 bg-clip-text text-transparent">
                    Our Products
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-slate-200">
                    Innovative solutions designed to streamline operations and enhance productivity
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-cyan-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Request Demo
                    </a>
                    <a href="/services" class="border-2 border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 hover:border-white/50 transition-all duration-300 backdrop-blur-sm">
                        Our Services
                    </a>
        </div>
            </div>
        </div>
    </section>

    <!-- Safleet Product -->
    <section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%230ea5e9" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Product Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-blue-100 border border-blue-200 mb-6">
                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-3 animate-pulse"></div>
                    <span class="text-blue-700 font-medium">🚛 Fleet Management Solution</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Safleet</h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Comprehensive fleet management system that transforms how businesses manage their vehicles, drivers, and operations.
                </p>
            </div>

            <!-- Main Product Card -->
            <div class="bg-white rounded-3xl shadow-2xl border border-blue-100 overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Left Content -->
                    <div class="p-12">
                        <div class="flex items-center mb-8">
                            <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1m-1-1V8a1 1 0 00-1-1H9m0 8v-8"></path>
                            </svg>
                        </div>
                        <div>
                                <h3 class="text-2xl font-bold text-slate-900">Fleet Management System</h3>
                                <p class="text-blue-600 font-semibold">Optimize • Track • Analyze</p>
                            </div>
                        </div>

                        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                            Safleet provides real-time vehicle tracking, maintenance scheduling, fuel monitoring, and driver analytics to help businesses reduce costs, improve safety, and enhance operational efficiency.
                        </p>

                        <!-- Features Grid -->
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="space-y-4">
                                <h4 class="font-bold text-slate-900 text-lg">Core Features</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Real-time GPS tracking</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Maintenance scheduling</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Fuel consumption monitoring</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Driver performance analytics</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <h4 class="font-bold text-slate-900 text-lg">Key Benefits</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Reduced operational costs</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Improved safety standards</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Enhanced efficiency</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Comprehensive reporting</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="https://www.safleet.co.za" target="_blank" class="bg-gradient-to-r from-blue-500 to-cyan-500 text-white px-8 py-4 rounded-xl font-semibold hover:from-blue-600 hover:to-cyan-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 text-center">
                                Visit Safleet
                            </a>
                            <a href="tel:+27724764625" class="border-2 border-blue-300 text-blue-700 px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition-all duration-300 text-center">
                                Call: 072 476 4625
                            </a>
                        </div>
                    </div>

                    <!-- Right Content - Dashboard Preview -->
                    <div class="bg-gradient-to-br from-slate-900 via-blue-900 to-cyan-900 p-12 text-white relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="20" cy="20" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                        
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-6 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Live Dashboard</h3>
                            
                            <!-- Dashboard Cards -->
                            <div class="space-y-6">
                                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20">
                                    <div class="flex items-center justify-between mb-4">
                                        <h4 class="font-semibold text-lg">Vehicle Status</h4>
                                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="text-center">
                                            <div class="text-3xl font-bold text-cyan-400">24</div>
                                            <div class="text-sm text-slate-300">Active Vehicles</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-3xl font-bold text-blue-400">6</div>
                                            <div class="text-sm text-slate-300">In Maintenance</div>
                                        </div>
                    </div>
                </div>

                                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20">
                                    <div class="flex items-center justify-between mb-4">
                                        <h4 class="font-semibold text-lg">Performance Metrics</h4>
                                        <div class="w-3 h-3 bg-blue-400 rounded-full animate-pulse"></div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex justify-between">
                                            <span class="text-slate-300">Fuel Efficiency</span>
                                            <span class="text-green-400 font-bold">28.5 MPG</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-slate-300">Maintenance Due</span>
                                            <span class="text-orange-400 font-bold">3 Vehicles</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-slate-300">Driver Score</span>
                                            <span class="text-cyan-400 font-bold">4.8/5</span>
                            </div>
                        </div>
                            </div>

                                <div class="bg-gradient-to-r from-cyan-500/20 to-blue-500/20 p-6 rounded-2xl border border-cyan-400/30">
                                    <h4 class="font-semibold mb-2">Perfect For</h4>
                                    <p class="text-cyan-100 text-sm">
                                        Transportation companies, delivery services, construction firms, and any business managing a fleet of vehicles.
                                    </p>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Creche Assist Product -->
    <section class="py-20 bg-gradient-to-br from-slate-50 via-purple-50 to-pink-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23a855f7" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Product Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-purple-100 border border-purple-200 mb-6">
                    <div class="w-3 h-3 bg-purple-500 rounded-full mr-3 animate-pulse"></div>
                    <span class="text-purple-700 font-medium">👶 Childcare Management Solution</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Creche Assist</h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Complete childcare management system that streamlines operations, enhances child safety, and improves parent engagement.
                </p>
            </div>

            <!-- Main Product Card -->
            <div class="bg-white rounded-3xl shadow-2xl border border-purple-100 overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Left Content - Dashboard Preview -->
                    <div class="bg-gradient-to-br from-purple-900 via-pink-900 to-purple-900 p-12 text-white relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="20" cy="20" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                        
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-6 bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">Management Dashboard</h3>
                            
                            <!-- Dashboard Cards -->
                            <div class="space-y-6">
                                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20">
                                    <div class="flex items-center justify-between mb-4">
                                        <h4 class="font-semibold text-lg">Today's Attendance</h4>
                                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="text-center">
                                            <div class="text-3xl font-bold text-pink-400">42</div>
                                            <div class="text-sm text-slate-300">Children Present</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-3xl font-bold text-purple-400">8</div>
                                            <div class="text-sm text-slate-300">Absent Today</div>
                                        </div>
                            </div>
                        </div>

                                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20">
                                    <div class="flex items-center justify-between mb-4">
                                        <h4 class="font-semibold text-lg">Activity Status</h4>
                                        <div class="w-3 h-3 bg-purple-400 rounded-full animate-pulse"></div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex justify-between">
                                            <span class="text-slate-300">Active Activities</span>
                                            <span class="text-pink-400 font-bold">5</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-slate-300">Meals Served</span>
                                            <span class="text-green-400 font-bold">42</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-slate-300">Parent Messages</span>
                                            <span class="text-purple-400 font-bold">12</span>
                                        </div>
                            </div>
                        </div>

                                <div class="bg-gradient-to-r from-pink-500/20 to-purple-500/20 p-6 rounded-2xl border border-pink-400/30">
                                    <h4 class="font-semibold mb-2">Perfect For</h4>
                                    <p class="text-pink-100 text-sm">
                                        Daycare centers, preschools, and childcare facilities looking to modernize their operations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="p-12">
                        <div class="flex items-center mb-8">
                            <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <div>
                                <h3 class="text-2xl font-bold text-slate-900">Childcare Management System</h3>
                                <p class="text-purple-600 font-semibold">Organize • Communicate • Protect</p>
                    </div>
                        </div>

                        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                            Creche Assist provides comprehensive childcare management tools including attendance tracking, parent communication, activity planning, and safety monitoring to ensure the best care for children.
                        </p>

                        <!-- Features Grid -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="space-y-4">
                                <h4 class="font-bold text-slate-900 text-lg">Core Features</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Child attendance tracking</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Parent communication portal</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Activity planning & scheduling</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Safety monitoring</span>
                    </div>
                </div>
            </div>
                            <div class="space-y-4">
                                <h4 class="font-bold text-slate-900 text-lg">Key Benefits</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Streamlined operations</span>
        </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Better parent communication</span>
            </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Enhanced child safety</span>
                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-slate-700 font-medium">Digital record keeping</span>
                </div>
                    </div>
                </div>
                    </div>

                        <!-- CTA -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="https://www.crecheassist.co.za" target="_blank" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-8 py-4 rounded-xl font-semibold hover:from-purple-600 hover:to-pink-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 text-center">
                                Visit Creche Assist
                            </a>
                            <a href="tel:+27724764625" class="border-2 border-purple-300 text-purple-700 px-8 py-4 rounded-xl font-semibold hover:bg-purple-50 transition-all duration-300 text-center">
                                Call: 072 476 4625
                            </a>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 relative overflow-hidden">
        <!-- Subtle background pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23059669" fill-opacity="0.05"%3E%3Ccircle cx="20" cy="20" r="1.5"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
            <div class="inline-flex items-center px-6 py-3 rounded-full bg-emerald-100 border border-emerald-200 mb-6">
                <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3 animate-pulse"></div>
                <span class="text-emerald-700 text-sm font-medium">🚀 Ready to Transform Your Operations?</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-900">
                Ready to Transform Your Operations?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-slate-600">
                Discover how our products can streamline your business processes and drive efficiency.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-emerald-600 hover:to-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Request Demo
                </a>
                <a href="/services" class="border-2 border-emerald-300 text-emerald-700 px-8 py-4 rounded-xl font-semibold hover:bg-emerald-50 hover:border-emerald-400 transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>

@endsection