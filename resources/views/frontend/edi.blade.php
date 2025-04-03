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
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- Featured Image Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl max-h-xl mx-auto">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl" data-aos="zoom-in">
                    <img src="{{ asset('blog_imgs/blog1.jpg') }}" alt="IT Services and Equipment" class="w-full h-auto">
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
                        An Hung Technology provides comprehensive IT equipment and infrastructure solutions to help
                        businesses establish, maintain, and optimize their technology environments. Our services range from
                        end-user device supply to complex IT infrastructure deployment, all supported by expert consultation
                        and ongoing technical support to ensure your business technology operates at peak efficiency.
                    </p>
                </div>

                <!-- End-User Equipment -->
                <div class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                        <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        End-User Equipment Services
                    </h2>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Supply and Distribution</h3>
                            <p class="text-gray-700">We provide a wide range of devices including desktop computers,
                                laptops, servers, mobile devices (smartphones, tablets), printers, scanners, and other
                                peripherals tailored to your business needs.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Device Consultation</h3>
                            <p class="text-gray-700">Our experts advise customers on selecting devices that meet their
                                specific usage needs, technical requirements, and budget constraints for optimal
                                performance.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Installation & Configuration</h3>
                            <p class="text-gray-700">We handle the installation of operating systems, application software,
                                and basic configurations of end-user devices to ensure stable and efficient operation from
                                day one.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Warranty & Repair</h3>
                            <p class="text-gray-700">Comprehensive warranty, maintenance, and repair services for all
                                end-user devices ensure quick resolution in case of malfunctions or technical issues.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300 md:col-span-2">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Device Management</h3>
                            <p class="text-gray-700">We offer remote device management services (MDM) to ensure security,
                                monitor device conditions, and maintain optimal performance across your organization's
                                technology assets.</p>
                        </div>
                    </div>
                </div>

                <!-- IT Infrastructure -->
                <div class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                        <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            </svg>
                        </span>
                        Information Technology Infrastructure
                    </h2>

                    <!-- Infrastructure Deployment -->
                    <div class="mb-10">
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                </svg>
                                Infrastructure Deployment
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Hardware & Software Solutions</h4>
                                        <p class="text-gray-700">We offer comprehensive solutions for hardware and software
                                            to support server systems, data storage (NAS, SAN), networking systems
                                            (switches, routers, firewalls), and other critical infrastructure devices.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Infrastructure Consultation</h4>
                                        <p class="text-gray-700">Our experts provide detailed advice on the design and
                                            deployment of IT infrastructure that meets your performance, security, and
                                            scalability requirements for long-term success.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">3</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Network System Installation</h4>
                                        <p class="text-gray-700">We provide professional services for installing LAN, WAN,
                                            VPN, Wi-Fi networks, and security devices such as firewalls and Intrusion
                                            Detection/Prevention Systems (IDS/IPS).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure Management -->
                    <div class="mb-10">
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                Infrastructure Management
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Monitoring & Maintenance</h4>
                                        <p class="text-gray-700">We provide comprehensive services for monitoring,
                                            maintaining, and managing IT infrastructure, including system resource
                                            monitoring (CPU, RAM, hard disk), network status, and network security.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Cloud Computing Services</h4>
                                        <p class="text-gray-700">We consult and deploy solutions for storage and computing
                                            on cloud platforms (public cloud, private cloud, hybrid cloud), supporting data
                                            backup, recovery, and security for modern business needs.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">3</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Performance Management &
                                            Optimization</h4>
                                        <p class="text-gray-700">Our team analyzes and optimizes the performance of server
                                            systems, databases, and enterprise applications to ensure maximum efficiency and
                                            return on your technology investments.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Support and Consulting -->
                <div class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                        <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </span>
                        Support and Consulting Services
                    </h2>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div
                            class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Requirements Consultation</h3>
                            </div>
                            <p class="text-gray-700 ml-14">We evaluate the needs and technical requirements of your
                                business to provide suitable solutions that align with your goals and operational processes.
                            </p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Training & Technology Transfer</h3>
                            </div>
                            <p class="text-gray-700 ml-14">We train your staff on using end-user devices and newly deployed
                                IT infrastructure solutions to ensure maximum adoption and productivity.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Technical Support</h3>
                            </div>
                            <p class="text-gray-700 ml-14">We provide 24/7 technical support services to resolve hardware
                                and software issues for end-user devices and IT infrastructure systems with minimal
                                disruption.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Reporting & Analysis</h3>
                            </div>
                            <p class="text-gray-700 ml-14">We provide regular reports on the performance, status, and
                                security of your IT infrastructure systems to help you make informed decisions about your
                                technology investments.</p>
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
                            An Hung Technology is a leading provider of IT solutions in Vietnam, specializing in IT
                            equipment, infrastructure deployment, and comprehensive technical support services.
                        </p>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="mt-8 flex items-center" data-aos="fade-up">
                    <span class="text-gray-700 font-medium mr-4">Share this article:</span>
                    <div class="flex space-x-3">
                        <a href="#"
                            class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white hover:bg-green-700 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18.042 13.045c-.23-.678-.508-1.311-.833-1.886l.917-3.678-2.159-2.159-3.678.917c-.575-.325-1.209-.604-1.886-.833L9.17 2.17h-3.05l-1.233 3.236a9.864 9.864 0 00-1.886.833l-3.678-.917-2.159 2.159.917 3.678a9.864 9.864 0 00-.833 1.886L2.17 14.83v3.05l3.236 1.233c.23.678.508 1.311.833 1.886l-.917 3.678 2.159 2.159 3.678-.917c.575.325 1.209.604 1.886.833l1.233 3.236h3.05l1.233-3.236c.678-.23 1.311-.508 1.886-.833l3.678.917 2.159-2.159-.917-3.678c.325-.575.604-1.209.833-1.886l3.236-1.233v-3.05l-3.236-1.233zM9.645 17.5a5 5 0 110-10 5 5 0 010 10z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M21.593 7.203a2.506 2.506 0 00-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 00-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 001.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z" />
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
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="block">
                            <img src="{{ asset('images/services/cybersecurity.jpg') }}" alt="Cybersecurity Solutions"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <a href="#" class="block">
                                <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">
                                    Cybersecurity Solutions</h3>
                            </a>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                Protect your organization from cyber threats with comprehensive security solutions designed
                                for modern businesses.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Related Service 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="block">
                            <img src="{{ asset('images/services/cloud-computing.jpg') }}" alt="Cloud Computing Solutions"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <a href="#" class="block">
                                <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">
                                    Cloud Computing Solutions</h3>
                            </a>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                Leverage the power of cloud computing to enhance scalability, flexibility, and
                                cost-efficiency for your business.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Related Service 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="block">
                            <img src="{{ asset('images/services/digital-transformation.jpg') }}"
                                alt="Digital Transformation" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <a href="#" class="block">
                                <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">
                                    Digital Transformation</h3>
                            </a>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                Transform your business with innovative digital solutions that drive growth, efficiency, and
                                competitive advantage.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
