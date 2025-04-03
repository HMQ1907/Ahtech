@extends('frontend.layouts.app')

@section('content')
<!-- Hero Section with Parallax Effect -->
<section class="relative bg-gradient-to-r from-primary-700 to-primary-500 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-900/80 to-primary-700/80"></div>
        <div class="absolute inset-0 bg-[url('/img/grid-pattern.svg')] opacity-20"></div>
    </div>
    
    
    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Featured Image Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl max-h-xl mx-auto">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl" data-aos="zoom-in">
                <img src="{{ asset('blog_imgs/blog2.jpg')}}" alt="Software Development and System Integration" class="w-full h-auto">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Introduction -->
            <div class="prose prose-lg max-w-none mb-12" data-aos="fade-up">
                <p class="lead text-xl text-gray-700 mb-8">
                    Our target is to develop software applications that meet user needs while integrating them with existing systems and services, ensuring seamless connectivity, efficient operation, and security of the overall system. We combine cutting-edge development practices with robust integration strategies to deliver solutions that drive business growth and operational excellence.
                </p>
            </div>
            
            <!-- Software Development -->
            <div class="mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </span>
                    Software Development
                </h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Requirements Research</h3>
                        <p class="text-gray-700">We gather and analyze requirements from all stakeholders including customers, end users, and functional departments to ensure a comprehensive understanding of project needs.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Software Design</h3>
                        <p class="text-gray-700">Our experts design robust software architecture, select appropriate technologies, and create intuitive user interfaces that deliver exceptional user experiences.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Application Development</h3>
                        <p class="text-gray-700">We write clean, efficient code based on defined requirements, develop optimized algorithms, and apply modern methodologies like Agile and DevOps for quality results.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Software Testing</h3>
                        <p class="text-gray-700">Our comprehensive testing approach includes unit, integration, and system testing to ensure software quality, with prompt resolution of any issues that arise.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300 md:col-span-2">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Maintenance & Upgrades</h3>
                        <p class="text-gray-700">We provide ongoing maintenance and upgrades based on evolving user needs and technological advancements, including security patches, bug fixes, and performance improvements.</p>
                    </div>
                </div>
            </div>
            
            <!-- Software Development Process -->
            <div class="mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </span>
                    Software Development Process
                </h2>
                
                <!-- Requirements Research and Analysis -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            Requirements Research and Analysis
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Stakeholder Engagement</h4>
                                    <p class="text-gray-700">We conduct thorough interviews and workshops with customers, end users, and functional departments to gather comprehensive requirements and understand business objectives.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Requirement Classification</h4>
                                    <p class="text-gray-700">We identify and categorize both technical and non-technical requirements to create a clear roadmap for development and ensure all needs are addressed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Software Design -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                            Software Design
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Architecture Design</h4>
                                    <p class="text-gray-700">We design scalable software architecture, including modules, components, and databases that support business growth and technological evolution.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Technology Selection</h4>
                                    <p class="text-gray-700">We choose appropriate technologies and development tools (programming languages, frameworks, database management systems) based on project requirements and long-term objectives.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">3</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">UI/UX Design</h4>
                                    <p class="text-gray-700">We create intuitive user interfaces and seamless user experiences that enhance usability and drive user adoption of the software solution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Programming and Application Development -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Programming and Application Development
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Code Development</h4>
                                    <p class="text-gray-700">We write clean, maintainable source code based on the defined requirements and design specifications, following industry best practices and coding standards.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Feature Implementation</h4>
                                    <p class="text-gray-700">We develop and optimize algorithms, features, and software functionality to deliver a robust solution that meets business requirements and performance expectations.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">3</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Development Methodologies</h4>
                                    <p class="text-gray-700">We apply modern software development methodologies (such as Agile, Scrum, DevOps, CI/CD) to ensure consistent progress, quality, and adaptability throughout the development lifecycle.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Software Testing -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Software Testing
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Comprehensive Testing</h4>
                                    <p class="text-gray-700">We conduct unit testing, integration testing, and system testing to ensure software quality at every level, from individual components to the entire system.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Issue Resolution</h4>
                                    <p class="text-gray-700">We address and resolve issues or bugs that arise during the development process with a systematic approach to ensure a stable and reliable final product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Maintenance and Upgrades -->
                <div>
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Maintenance and Upgrades
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Ongoing Support</h4>
                                    <p class="text-gray-700">We ensure software maintenance and upgrades based on evolving user needs and technological advancements to keep your systems current and competitive.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Security and Performance</h4>
                                    <p class="text-gray-700">We provide security patches, bug fixes, and performance improvements to maintain the integrity, security, and efficiency of your software solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- System Integration -->
            <div class="mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </span>
                    System Integration
                </h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Integration Design & Evaluation</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We analyze existing systems and identify integration points between different software, hardware, and services to design optimal integration solutions.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">APIs & Integration Protocols</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We develop and deploy APIs and use common integration protocols such as REST, SOAP, MQTT, and WebSocket to ensure efficient communication between systems.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Data Processing & Synchronization</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We ensure accurate and quick data synchronization between systems using advanced data integration tools and methods like ETL and Data Sync.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Integration Testing</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We conduct thorough integration testing to ensure that systems operate in sync and without issues when connected, evaluating and improving the performance of integrated systems.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Security & Access Management</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We ensure that integrated systems comply with security requirements and protect data, while managing and monitoring access rights to maintain system integrity.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Monitoring & Maintenance</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We monitor system connections and perform regular maintenance to ensure continuous and efficient system operation, addressing issues and implementing improvements as needed.</p>
                    </div>
                </div>
            </div>
            
            <!-- Author Info -->
            <div class="mt-12 flex items-center p-6 bg-gray-50 rounded-xl shadow-md" data-aos="fade-up">
                <div class="flex-shrink-0 mr-4">
                    <div class="h-16 w-16 rounded-full bg-primary-100 flex items-center justify-center">
                        <span class="text-xl font-bold text-primary-600">AH</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900">An Hung Technology</h3>
                    <p class="text-gray-600">
                        An Hung Technology is a leading provider of software development and system integration services in Vietnam, specializing in creating custom solutions that drive business growth and operational excellence.
                    </p>
                </div>
            </div>
            
            <!-- Share Buttons -->
            <div class="mt-8 flex items-center" data-aos="fade-up">
                <span class="text-gray-700 font-medium mr-4">Share this article:</span>
                <div class="flex space-x-3">
                    <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white hover:bg-green-700 transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18.042 13.045c-.23-.678-.508-1.311-.833-1.886l.917-3.678-2.159-2.159-3.678.917c-.575-.325-1.209-.604-1.886-.833L9.17 2.17h-3.05l-1.233 3.236a9.864 9.864 0 00-1.886.833l-3.678-.917-2.159 2.159.917 3.678a9.864 9.864 0 00-.833 1.886L2.17 14.83v3.05l3.236 1.233c.23.678.508 1.311.833 1.886l-.917 3.678 2.159 2.159 3.678-.917c.575.325 1.209.604 1.886.833l1.233 3.236h3.05l1.233-3.236c.678-.23 1.311-.508 1.886-.833l3.678.917 2.159-2.159-.917-3.678c.325-.575.604-1.209.833-1.886l3.236-1.233v-3.05l-3.236-1.233zM9.645 17.5a5 5 0 110-10 5 5 0 010 10z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21.593 7.203a2.506 2.506 0 00-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 00-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 001.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Articles -->
{{-- <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-4 text-gray-900">Related Services</h2>
                <div class="w-24 h-1 bg-primary-600 mx-auto mb-6"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Related Service 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="block">
                        <img src="{{ asset('images/services/cybersecurity.jpg') }}" alt="Cybersecurity Solutions" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <a href="#" class="block">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">Cybersecurity Solutions</h3>
                        </a>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Protect your organization from cyber threats with comprehensive security solutions designed for modern businesses.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Related Service 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="block">
                        <img src="{{ asset('images/services/cloud-computing.jpg') }}" alt="Cloud Computing Solutions" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <a href="#" class="block">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">Cloud Computing Solutions</h3>
                        </a>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Leverage the power of cloud computing to enhance scalability, flexibility, and cost-efficiency for your business.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Related Service 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="block">
                        <img src="{{ asset('images/services/digital-transformation.jpg') }}" alt="Digital Transformation" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <a href="#" class="block">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">Digital Transformation</h3>
                        </a>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Transform your business with innovative digital solutions that drive growth, efficiency, and competitive advantage.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection