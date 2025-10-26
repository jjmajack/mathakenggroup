@extends('layouts.app')

@section('title', 'Contact Us - Mathakeng Group Technology')
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
                    <span class="text-cyan-300 text-sm font-medium">📞 Get In Touch</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white via-cyan-100 to-blue-100 bg-clip-text text-transparent">
                    Contact Us
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-slate-200">
                    Let's discuss how we can help transform your business with technology
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+27724764625" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-cyan-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Call Us Now
                    </a>
                    <a href="mailto:info@mathakenggroup.co.za" class="border-2 border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 hover:border-white/50 transition-all duration-300 backdrop-blur-sm">
                        Send Email
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-cyan-100 border border-cyan-200 mb-6">
                        <span class="text-cyan-700 text-sm font-medium">📞 Contact Information</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Get In Touch</h2>
                    <p class="text-lg text-slate-600 mb-8">
                        Ready to transform your business with our technology solutions? We'd love to hear from you. Whether you need IT consulting, custom software development, or industrial automation solutions, we're here to help.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Email Us</h3>
                                <p class="text-slate-600">info@mathakenggroup.co.za</p>
                                <p class="text-slate-600">support@mathakenggroup.co.za</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-green-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Call Us</h3>
                                <p class="text-slate-600">+27 (0) 72 476 4625</p>
                                <p class="text-slate-600">Available 8AM - 6PM</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Visit Us</h3>
                                <p class="text-slate-600">123 Technology Street</p>
                                <p class="text-slate-600">Johannesburg, 2000</p>
                                <p class="text-slate-600">South Africa</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Business Hours</h3>
                                <p class="text-slate-600">Monday - Friday: 8:00 AM - 6:00 PM</p>
                                <p class="text-slate-600">Saturday: 9:00 AM - 2:00 PM</p>
                                <p class="text-slate-600">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-slate-900 to-blue-900 p-8 rounded-2xl text-white shadow-2xl">
                    <h3 class="text-2xl font-bold mb-6 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Send Us a Message</h3>
                    
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-500/20 border border-green-400/30 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-green-300">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-500/20 border border-red-400/30 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-red-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-red-300">{{ session('error') }}</span>
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 @error('name') border-red-400 @enderror" placeholder="Your full name">
                            @error('name')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 @error('email') border-red-400 @enderror" placeholder="your.email@example.com">
                            @error('email')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="company" class="block text-sm font-medium text-slate-300 mb-2">Company</label>
                            <input type="text" id="company" name="company" value="{{ old('company') }}" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 @error('company') border-red-400 @enderror" placeholder="Your company name">
                            @error('company')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-slate-300 mb-2">Service Interest</label>
                            <select id="service" name="service" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white @error('service') border-red-400 @enderror">
                                <option value="" class="text-slate-900">Select a service</option>
                                <option value="it-consulting" class="text-slate-900" {{ old('service') == 'it-consulting' ? 'selected' : '' }}>IT Consulting</option>
                                <option value="industrial-automation" class="text-slate-900" {{ old('service') == 'industrial-automation' ? 'selected' : '' }}>Industrial Automation</option>
                                <option value="custom-development" class="text-slate-900" {{ old('service') == 'custom-development' ? 'selected' : '' }}>Custom Development</option>
                                <option value="safleet" class="text-slate-900" {{ old('service') == 'safleet' ? 'selected' : '' }}>Safleet - Fleet Management</option>
                                <option value="creche-assist" class="text-slate-900" {{ old('service') == 'creche-assist' ? 'selected' : '' }}>Creche Assist - Creche Management</option>
                                <option value="other" class="text-slate-900" {{ old('service') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('service')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 @error('message') border-red-400 @enderror" placeholder="Tell us about your project or requirements...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-cyan-600 hover:to-blue-700 transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experienced professionals dedicated to delivering exceptional technology solutions
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <div class="text-center">
                            <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Jackson Mashabela</h3>
                            <p class="text-blue-600 font-semibold mb-4">CEO, Software Developer/Engineer</p>
                            <p class="text-gray-600 mb-4">
                                Jackson brings extensive experience in software development and industrial automation to Mathakeng Group Technology. His technical expertise spans across multiple domains, from enterprise software development to PLC programming for industrial automation systems.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Software Development</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">PLC Programming</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">System Architecture</span>
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Industrial Automation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Mathakeng Group?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We combine technical expertise with business acumen to deliver solutions that drive real results
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Proven Expertise</h3>
                    <p class="text-gray-600">
                        Years of experience in software development and industrial automation, with a track record of successful project deliveries.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Innovation Focus</h3>
                    <p class="text-gray-600">
                        We stay at the forefront of technology trends, ensuring our solutions are built with the latest and most effective tools.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Client Partnership</h3>
                    <p class="text-gray-600">
                        We work closely with our clients as partners, understanding their unique needs and delivering tailored solutions.
                    </p>
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
                <span class="text-emerald-700 text-sm font-medium">🚀 Ready to Start Your Project?</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-900">
                Ready to Start Your Project?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-slate-600">
                Let's discuss your requirements and explore how our technology solutions can help your business grow.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+27724764625" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-emerald-600 hover:to-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Call Us Now
                </a>
                <a href="mailto:info@mathakenggroup.co.za" class="border-2 border-emerald-300 text-emerald-700 px-8 py-4 rounded-xl font-semibold hover:bg-emerald-50 hover:border-emerald-400 transition-all duration-300">
                    Send Email
                </a>
            </div>
        </div>
    </section>

@endsection

