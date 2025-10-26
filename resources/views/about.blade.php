@extends('layouts.app')

@section('title', 'About Us - Mathakeng Group Technology')

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
                    <span class="text-cyan-300 text-sm font-medium">💡 Our Story</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white via-cyan-100 to-blue-100 bg-clip-text text-transparent">
                    About Mathakeng Group
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-slate-200">
                    Pioneering technology solutions for the modern world
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-cyan-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Get In Touch
                    </a>
                    <a href="/products" class="border-2 border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 hover:border-white/50 transition-all duration-300 backdrop-blur-sm">
                        Our Products
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-cyan-100 border border-cyan-200 mb-6">
                        <span class="text-cyan-700 text-sm font-medium">🏢 Our Foundation</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Our Story</h2>
                    <p class="text-lg text-slate-600 mb-6">
                        Mathakeng Group Technology was founded by Jackson Mashabela, a visionary CEO and accomplished Software Developer/Engineer with a passion for creating innovative technology solutions.
                    </p>
                    <p class="text-lg text-slate-600 mb-6">
                        Our journey began with a simple yet powerful vision: to bridge the gap between traditional industries and cutting-edge technology. We recognized that many businesses were struggling to adapt to the digital age, and we set out to change that.
                    </p>
                    <p class="text-lg text-slate-600">
                        Today, we stand as a leading IT consulting company, having successfully developed and deployed solutions that have transformed businesses across various sectors.
                    </p>
                </div>
                <div class="bg-gradient-to-br from-slate-900 to-blue-900 p-8 rounded-2xl text-white shadow-2xl">
                    <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Our Mission</h3>
                    <p class="text-slate-300 mb-6">
                        To empower businesses with innovative technology solutions that drive growth, efficiency, and competitive advantage in an ever-evolving digital landscape.
                    </p>
                    <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Our Vision</h3>
                    <p class="text-slate-300">
                        To be the leading provider of technology solutions that transform industries and create sustainable value for our clients and communities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CEO Profile -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 border border-blue-200 mb-6">
                    <span class="text-blue-700 text-sm font-medium">👨‍💼 Leadership</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Meet Our CEO</h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Jackson Mashabela - Visionary Leader & Technology Expert
                </p>
            </div>
            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-slate-900 to-blue-900 rounded-2xl shadow-2xl p-8 text-white">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <div class="text-center md:text-left">
                            <div class="w-32 h-32 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                                <span class="text-white font-bold text-2xl">JM</span>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <h3 class="text-2xl font-bold mb-2 bg-gradient-to-r from-white to-cyan-100 bg-clip-text text-transparent">Jackson Mashabela</h3>
                            <p class="text-cyan-300 font-semibold mb-4">CEO, Software Developer/Engineer</p>
                            <p class="text-slate-300 mb-4">
                                Jackson brings extensive experience in software development and industrial automation to Mathakeng Group Technology. His technical expertise spans across multiple domains, from enterprise software development to PLC programming for industrial automation systems.
                            </p>
                            <p class="text-slate-300 mb-6">
                                Under his leadership, the company has successfully developed and deployed innovative solutions including Safleet (Fleet Management System) and Creche Assist (Creche Management System), demonstrating his commitment to solving real-world business challenges through technology.
                            </p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-cyan-300 mb-2">Expertise</h4>
                                    <ul class="text-slate-300 space-y-1">
                                        <li>• Software Development</li>
                                        <li>• Industrial Automation</li>
                                        <li>• PLC Programming</li>
                                        <li>• System Architecture</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-300 mb-2">Focus Areas</h4>
                                    <ul class="text-slate-300 space-y-1">
                                        <li>• Fleet Management</li>
                                        <li>• Facility Management</li>
                                        <li>• Process Automation</li>
                                        <li>• Digital Transformation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Values -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    The principles that guide everything we do
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600">
                        We strive for excellence in every solution we deliver, ensuring the highest quality and performance standards.
                    </p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600">
                        We embrace cutting-edge technologies and innovative approaches to solve complex business challenges.
                    </p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Partnership</h3>
                    <p class="text-gray-600">
                        We build lasting partnerships with our clients, working closely to understand their needs and deliver tailored solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industrial Automation Focus -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Industrial Automation Expertise</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Advancing manufacturing through intelligent automation solutions
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">PLC Programming & Industrial Systems</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Mathakeng Group Technology is expanding its expertise into industrial automated plants, bringing our software development experience to the manufacturing sector.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2"></div>
                            <div>
                                <h4 class="font-semibold text-gray-900">PLC Programming</h4>
                                <p class="text-gray-600">Expert programming of Programmable Logic Controllers for industrial automation</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2"></div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Process Optimization</h4>
                                <p class="text-gray-600">Designing and implementing automated systems that improve efficiency and reduce costs</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2"></div>
                            <div>
                                <h4 class="font-semibold text-gray-900">System Integration</h4>
                                <p class="text-gray-600">Seamlessly integrating automation systems with existing business processes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Why Industrial Automation?</h4>
                    <p class="text-gray-600 mb-6">
                        As technology continues to evolve, we recognize the immense potential of industrial automation to transform manufacturing processes. Our experience in software development provides a solid foundation for creating intelligent automation solutions.
                    </p>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h5 class="font-semibold text-blue-900 mb-2">Our Approach</h5>
                        <p class="text-blue-800 text-sm">
                            We combine traditional PLC programming expertise with modern software development practices to create robust, scalable automation solutions that meet the demands of today's industrial environment.
                        </p>
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
                <span class="text-emerald-700 text-sm font-medium">🚀 Ready to Work With Us?</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-900">
                Ready to Work With Us?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-slate-600">
                Let's discuss how our expertise in software development and industrial automation can benefit your business.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-emerald-600 hover:to-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Get In Touch
                </a>
                <a href="/products" class="border-2 border-emerald-300 text-emerald-700 px-8 py-4 rounded-xl font-semibold hover:bg-emerald-50 hover:border-emerald-400 transition-all duration-300">
                    View Our Products
                </a>
            </div>
        </div>
    </section>

@endsection

