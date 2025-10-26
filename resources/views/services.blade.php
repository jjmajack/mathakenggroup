@extends('layouts.app')

@section('title', 'Our Services - Mathakeng Group Technology')
@section('body-class', 'bg-gray-50')

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
                    <span class="text-cyan-300 text-sm font-medium">⚡ Expert Services</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white via-cyan-100 to-blue-100 bg-clip-text text-transparent">
                    Our Services
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-slate-200">
                    Comprehensive technology solutions for modern businesses
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-cyan-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Get a Quote
                    </a>
                    <a href="/products" class="border-2 border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 hover:border-white/50 transition-all duration-300 backdrop-blur-sm">
                        Our Products
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- IT Consulting Service -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-3xl p-12 shadow-xl border border-cyan-100">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 border border-blue-200 mb-6">
                        <span class="text-blue-700 text-sm font-medium">💼 IT Consulting</span>
                    </div>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-slate-900">IT Consulting</h2>
                            <p class="text-blue-600 font-semibold text-lg">Strategic Technology Guidance</p>
                        </div>
                    </div>
                    <p class="text-lg text-slate-600 mb-6">
                        Our IT consulting services help businesses leverage technology to achieve their strategic goals. We provide expert guidance on technology selection, implementation, and optimization to drive business growth and efficiency.
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-3">What We Offer</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    Technology strategy development
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    System architecture design
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    Digital transformation planning
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    Technology assessment & audit
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-3">Benefits</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    Reduced technology costs
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    Improved operational efficiency
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    Enhanced competitive advantage
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                    Future-ready technology stack
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-slate-900 to-blue-900 p-8 rounded-2xl text-white shadow-2xl">
                    <h3 class="text-xl font-bold mb-4 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Our Approach</h3>
                    <div class="space-y-4">
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/20">
                            <h4 class="font-semibold mb-2">1. Assessment</h4>
                            <p class="text-slate-300 text-sm">Comprehensive analysis of your current technology landscape</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/20">
                            <h4 class="font-semibold mb-2">2. Strategy</h4>
                            <p class="text-slate-300 text-sm">Development of tailored technology roadmap</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/20">
                            <h4 class="font-semibold mb-2">3. Implementation</h4>
                            <p class="text-slate-300 text-sm">Guided execution of technology initiatives</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/20">
                            <h4 class="font-semibold mb-2">4. Optimization</h4>
                            <p class="text-slate-300 text-sm">Continuous improvement and support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Development Service -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-12 shadow-xl border border-purple-100">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Custom Development</h2>
                            <p class="text-purple-600 font-semibold text-lg">Tailored Software Solutions</p>
                        </div>
                    </div>
                    <p class="text-lg text-gray-600 mb-6">
                        We develop custom software solutions tailored to your specific business needs. From web applications to mobile apps and enterprise systems, we create solutions that integrate seamlessly with your existing infrastructure.
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-3">Development Services</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Web application development
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Mobile app development
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    API development & integration
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Database design & optimization
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-3">Technologies We Use</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Modern web frameworks
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Cloud platforms & services
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    DevOps & CI/CD pipelines
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Microservices architecture
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Development Process</h3>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">1. Discovery & Planning</h4>
                            <p class="text-gray-600 text-sm">Understanding your requirements and creating a detailed project plan</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">2. Design & Prototyping</h4>
                            <p class="text-gray-600 text-sm">Creating wireframes and prototypes to visualize the solution</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">3. Development & Testing</h4>
                            <p class="text-gray-600 text-sm">Building and thoroughly testing the solution</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">4. Deployment & Support</h4>
                            <p class="text-gray-600 text-sm">Launching the solution and providing ongoing support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industrial Automation Service -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-3xl p-12 shadow-xl border border-emerald-100">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="bg-gray-100 p-8 rounded-lg order-2 md:order-1">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">PLC Programming Expertise</h3>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">Process Control</h4>
                            <p class="text-gray-600 text-sm">Advanced PLC programming for complex manufacturing processes</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">Safety Systems</h4>
                            <p class="text-gray-600 text-sm">Implementation of safety protocols and emergency systems</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">Data Integration</h4>
                            <p class="text-gray-600 text-sm">Connecting PLC systems with business intelligence platforms</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-900 mb-2">Maintenance</h4>
                            <p class="text-gray-600 text-sm">Ongoing support and optimization of automation systems</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Industrial Automation</h2>
                            <p class="text-green-600 font-semibold text-lg">PLC Programming & Process Optimization</p>
                        </div>
                    </div>
                    <p class="text-lg text-gray-600 mb-6">
                        Our industrial automation services help manufacturing companies optimize their processes through intelligent automation solutions. We specialize in PLC programming and system integration to improve efficiency, reduce costs, and enhance safety.
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-3">Our Services</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    PLC programming & configuration
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    HMI/SCADA system development
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Process optimization & control
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    System integration & testing
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-3">Industries We Serve</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Manufacturing & Production
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Food & Beverage Processing
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Chemical & Pharmaceutical
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Water Treatment & Utilities
                                </li>
                            </ul>
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
                <span class="text-emerald-700 text-sm font-medium">🚀 Ready to Get Started?</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-900">
                Ready to Get Started?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-slate-600">
                Let's discuss how our services can help transform your business operations and drive growth.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-emerald-600 hover:to-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Get a Quote
                </a>
                <a href="/products" class="border-2 border-emerald-300 text-emerald-700 px-8 py-4 rounded-xl font-semibold hover:bg-emerald-50 hover:border-emerald-400 transition-all duration-300">
                    View Our Products
                </a>
            </div>
        </div>
    </section>

@endsection

