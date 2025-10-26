@extends('layouts.app')

@section('title', 'Mathakeng Group Technology - IT Consulting & Industrial Automation')

@section('content')
    <!-- Hero Section -->
    <section class="pt-16 relative overflow-hidden min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-cyan-900">
        <!-- Animated background elements -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        
        <!-- Floating geometric shapes -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-20 h-20 bg-cyan-500/10 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-blue-500/10 rounded-lg rotate-45 animate-bounce"></div>
            <div class="absolute bottom-40 left-20 w-24 h-24 bg-purple-500/10 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-12 h-12 bg-pink-500/10 rounded-lg rotate-12 animate-bounce"></div>
        </div>
        
        <div class="relative z-10 flex items-center min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="text-white space-y-8">
                        <!-- Badge -->
                        <div class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mr-3 animate-pulse"></div>
                            <span class="text-cyan-300 text-sm font-medium">🚀 Innovating Tomorrow's Technology</span>
                        </div>
                        
                        <!-- Main Heading -->
                        <div class="space-y-4">
                            <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                                <span class="bg-gradient-to-r from-white via-cyan-100 to-blue-100 bg-clip-text text-transparent">
                                    Mathakeng
                                </span>
                                <br>
                                <span class="bg-gradient-to-r from-cyan-300 to-blue-300 bg-clip-text text-transparent">
                                    Group
                                </span>
                            </h1>
                            <p class="text-xl md:text-2xl text-slate-200 max-w-2xl">
                                Pioneering the Future of IT Consulting & Industrial Automation
                            </p>
                        </div>
                        
                        <!-- Description -->
                        <p class="text-lg text-slate-300 max-w-xl leading-relaxed">
                            We deliver cutting-edge technology solutions that transform businesses through innovative software development, industrial automation, and smart fleet management systems.
                        </p>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/products" class="group bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-cyan-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                                <span>Explore Our Solutions</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                            <a href="/contact" class="border-2 border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 hover:border-white/50 transition-all duration-300 backdrop-blur-sm flex items-center justify-center">
                                <span>Start Your Journey</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </a>
                        </div>
                        
                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-8">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-cyan-400">10+</div>
                                <div class="text-sm text-slate-300">Years Experience</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-400">50+</div>
                                <div class="text-sm text-slate-300">Projects Delivered</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-purple-400">100%</div>
                                <div class="text-sm text-slate-300">Client Satisfaction</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Content - Interactive Visual -->
                    <div class="relative">
                        <!-- Main Card -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20 shadow-2xl">
                            <!-- Header -->
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                                </div>
                                <div class="text-white/60 text-sm">Mathakeng Group Dashboard</div>
                            </div>
                            
                            <!-- Content Grid -->
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Safleet Card -->
                                <div class="bg-gradient-to-br from-blue-500/20 to-cyan-500/20 p-4 rounded-xl border border-blue-400/30">
                                    <div class="flex items-center mb-2">
                                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </div>
                                        <span class="text-white font-semibold text-sm">Safleet</span>
                                    </div>
                                    <div class="text-cyan-300 text-xs">Fleet Management</div>
                                </div>
                                
                                <!-- Creche Assist Card -->
                                <div class="bg-gradient-to-br from-purple-500/20 to-pink-500/20 p-4 rounded-xl border border-purple-400/30">
                                    <div class="flex items-center mb-2">
                                        <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                            </svg>
                                        </div>
                                        <span class="text-white font-semibold text-sm">Creche Assist</span>
                                    </div>
                                    <div class="text-purple-300 text-xs">Childcare Management</div>
                                </div>
                                
                                <!-- Industrial Automation -->
                                <div class="bg-gradient-to-br from-emerald-500/20 to-green-500/20 p-4 rounded-xl border border-emerald-400/30">
                                    <div class="flex items-center mb-2">
                                        <div class="w-8 h-8 bg-emerald-500 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            </svg>
                                        </div>
                                        <span class="text-white font-semibold text-sm">Automation</span>
                                    </div>
                                    <div class="text-emerald-300 text-xs">PLC Programming</div>
                                </div>
                                
                                <!-- IT Consulting -->
                                <div class="bg-gradient-to-br from-orange-500/20 to-red-500/20 p-4 rounded-xl border border-orange-400/30">
                                    <div class="flex items-center mb-2">
                                        <div class="w-8 h-8 bg-orange-500 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <span class="text-white font-semibold text-sm">IT Consulting</span>
                                    </div>
                                    <div class="text-orange-300 text-xs">Strategic Solutions</div>
                                </div>
                            </div>
                            
                            <!-- Bottom Stats -->
                            <div class="mt-6 pt-6 border-t border-white/20">
                                <div class="flex justify-between items-center">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-cyan-400">24/7</div>
                                        <div class="text-xs text-slate-300">Support</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-400">99.9%</div>
                                        <div class="text-xs text-slate-300">Uptime</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-purple-400">AI</div>
                                        <div class="text-xs text-slate-300">Powered</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-cyan-400 rounded-full animate-bounce"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-blue-400 rounded-full animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 animate-bounce">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-cyan-100 border border-cyan-200 mb-6">
                    <span class="text-cyan-700 text-sm font-medium">💡 Innovation at Scale</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">About Mathakeng Group</h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Founded by Jackson Mashabela, we are a leading IT consulting company specializing in innovative software solutions and industrial automation systems.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Our Mission</h3>
                    <p class="text-slate-600 mb-6">
                        To deliver cutting-edge technology solutions that drive business growth and operational efficiency. We combine deep technical expertise with industry knowledge to create solutions that matter.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-slate-200">
                            <div class="w-3 h-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mr-4"></div>
                            <span class="text-slate-700 font-medium">Custom Software Development</span>
                        </div>
                        <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-slate-200">
                            <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mr-4"></div>
                            <span class="text-slate-700 font-medium">Industrial Automation & PLC Programming</span>
                        </div>
                        <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border border-slate-200">
                            <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mr-4"></div>
                            <span class="text-slate-700 font-medium">Fleet & Facility Management Systems</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-slate-900 to-blue-900 p-8 rounded-2xl text-white shadow-2xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">JM</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold">Jackson Mashabela</h4>
                            <p class="text-cyan-300">CEO, Software Developer/Engineer</p>
                        </div>
                    </div>
                    <p class="text-slate-300 mb-6">
                        With extensive experience in software development and industrial automation, Jackson leads our team in delivering innovative solutions that transform businesses.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center">
                            <div class="text-2xl font-bold text-cyan-400">10+</div>
                            <div class="text-sm text-slate-300">Years Experience</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center">
                            <div class="text-2xl font-bold text-blue-400">50+</div>
                            <div class="text-sm text-slate-300">Projects Delivered</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 border border-blue-200 mb-6">
                    <span class="text-blue-700 text-sm font-medium">🚀 Our Innovation Portfolio</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Our Products</h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Innovative solutions designed to streamline operations and enhance productivity
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="group bg-gradient-to-br from-blue-50 to-cyan-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-blue-100 hover:border-blue-200">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-sm font-medium mb-4">
                            🚛 Product
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1m-1-1V8a1 1 0 00-1-1H9m0 8v-8"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Safleet</h3>
                        <p class="text-blue-600 font-semibold">Fleet Management System</p>
                    </div>
                    <p class="text-slate-600 mb-6">
                        Comprehensive fleet management solution that helps businesses optimize their vehicle operations, track maintenance, monitor fuel consumption, and improve driver safety.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center p-3 bg-white/60 rounded-lg">
                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                            <span class="text-slate-700 font-medium">Real-time vehicle tracking</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/60 rounded-lg">
                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                            <span class="text-slate-700 font-medium">Maintenance scheduling</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/60 rounded-lg">
                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                            <span class="text-slate-700 font-medium">Driver performance analytics</span>
                        </div>
                    </div>
                    <div class="mt-6 bg-gradient-to-r from-blue-500 to-cyan-500 text-white px-6 py-3 rounded-xl text-center font-semibold">
                        Learn More →
                    </div>
                </div>
                <div class="group bg-gradient-to-br from-purple-50 to-pink-50 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-purple-100 hover:border-purple-200">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-sm font-medium mb-4">
                            👶 Product
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Creche Assist</h3>
                        <p class="text-purple-600 font-semibold">Creche Management System</p>
                    </div>
                    <p class="text-slate-600 mb-6">
                        Complete childcare management solution designed to streamline operations, enhance child safety, and improve parent engagement in childcare facilities.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center p-3 bg-white/60 rounded-lg">
                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                            <span class="text-slate-700 font-medium">Child attendance tracking</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/60 rounded-lg">
                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                            <span class="text-slate-700 font-medium">Parent communication portal</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/60 rounded-lg">
                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                            <span class="text-slate-700 font-medium">Activity planning & reporting</span>
                        </div>
                    </div>
                    <div class="mt-6 bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-xl text-center font-semibold">
                        Learn More →
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-cyan-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-100 border border-emerald-200 mb-6">
                    <span class="text-emerald-700 text-sm font-medium">⚡ Expert Services</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Our Services</h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Comprehensive technology solutions for modern businesses
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="group text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-cyan-200">
                    <div class="w-20 h-20 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-cyan-100 text-cyan-700 text-sm font-medium mb-4">
                        💼 Service
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">IT Consulting</h3>
                    <p class="text-slate-600 mb-6">
                        Strategic technology consulting to help businesses leverage technology for growth and efficiency.
                    </p>
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mr-2"></div>
                            Technology Strategy
                        </div>
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mr-2"></div>
                            Digital Transformation
                        </div>
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mr-2"></div>
                            System Architecture
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white px-6 py-3 rounded-xl font-semibold">
                        Learn More →
                    </div>
                </div>
                <div class="group text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-emerald-200">
                    <div class="w-20 h-20 bg-gradient-to-r from-emerald-500 to-green-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-sm font-medium mb-4">
                        ⚙️ Service
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Industrial Automation</h3>
                    <p class="text-slate-600 mb-6">
                        PLC programming and industrial automation solutions to optimize manufacturing processes.
                    </p>
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-emerald-400 rounded-full mr-2"></div>
                            PLC Programming
                        </div>
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-emerald-400 rounded-full mr-2"></div>
                            Process Optimization
                        </div>
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-emerald-400 rounded-full mr-2"></div>
                            System Integration
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-emerald-500 to-green-500 text-white px-6 py-3 rounded-xl font-semibold">
                        Learn More →
                    </div>
                </div>
                <div class="group text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-200 hover:border-purple-200">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-sm font-medium mb-4">
                        💻 Service
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Custom Development</h3>
                    <p class="text-slate-600 mb-6">
                        Tailored software solutions designed to meet specific business requirements and challenges.
                    </p>
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-purple-400 rounded-full mr-2"></div>
                            Web Applications
                        </div>
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-purple-400 rounded-full mr-2"></div>
                            Mobile Solutions
                        </div>
                        <div class="flex items-center justify-center text-sm text-slate-600">
                            <div class="w-2 h-2 bg-purple-400 rounded-full mr-2"></div>
                            API Development
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-xl font-semibold">
                        Learn More →
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
                <span class="text-emerald-700 text-sm font-medium">🚀 Ready to Transform?</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-900">
                Ready to Transform Your Business?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-slate-600">
                Let's discuss how our technology solutions can drive your business forward.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-emerald-600 hover:to-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Get Started Today
                </a>
                <a href="/products" class="border-2 border-emerald-300 text-emerald-700 px-8 py-4 rounded-xl font-semibold hover:bg-emerald-50 hover:border-emerald-400 transition-all duration-300">
                    View Our Solutions
                </a>
            </div>
        </div>
    </section>

@endsection
