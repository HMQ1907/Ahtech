@extends('frontend.layouts.app')

@section('content')
    <section class="relative bg-gradient-to-r from-primary-700 to-primary-500 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary-900/80 to-primary-700/80"></div>
            <div class="absolute inset-0 bg-[url('/img/grid-pattern.svg')] opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-24">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Services</h1>
                <div class="w-24 h-1 bg-white mx-auto mb-8"></div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-6 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Our Services</h2>
                <div class="w-24 h-1 bg-primary-600 mx-auto mb-8"></div>
                <p class="text-xl text-gray-600">
                    An Hung is committed to delivering the most effective service and product quality to its customers.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    {{-- <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-900">End-User Devices and Infrastructure</h3>
                    <div class="w-12 h-1 bg-primary-600 mx-auto mb-4"></div>
                    <p class="text-gray-600 mb-6 text-center">
                        We provide, install, and deploy modern technology devices such as computers, printers, servers, networking equipment, along with robust IT infrastructure solutions that ensure security and optimize business workflows.
                    </p>
                    <div class="text-center">
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="p-6">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-900">Software Development and System Integration</h3>
                    <div class="w-12 h-1 bg-primary-600 mx-auto mb-4"></div>
                    <p class="text-gray-600 mb-6 text-center">
                        We develop specialized software tailored to the specific needs of each business, ranging from ERP and CRM systems to custom software solutions for industries such as aviation, airports, logistics, and more. We also offer system integration services, connecting various software and devices into a unified, synchronized ecosystem.
                    </p>
                    <div class="text-center">
                        <a href="" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="p-6">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-900">Cybersecurity Solutions</h3>
                    <div class="w-12 h-1 bg-primary-600 mx-auto mb-4"></div>
                    <p class="text-gray-600 mb-6 text-center">
                        With the increasing risk of cyberattacks and growing security requirements, An Hung provides comprehensive cybersecurity solutions, ranging from firewalls and network security to data protection services and disaster recovery, ensuring the safety and security of the enterprise's IT systems.
                    </p>
                    <div class="text-center">
                        <a href="" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <div class="p-6">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-gray-900">IT System Maintenance</h3>
                    <div class="w-12 h-1 bg-primary-600 mx-auto mb-4"></div>
                    <p class="text-gray-600 mb-6 text-center">
                        IT system maintenance services are crucial for maintaining and ensuring the stable operation of an organization's or company's IT systems. These services include monitoring, maintenance, updating, and troubleshooting systems to ensure optimal performance and minimize downtime.
                    </p>
                    <div class="text-center">
                        <a href="" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            Read more
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

    <!-- Detailed Services Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <!-- Service 1 Detail -->
                <div class="mb-20" data-aos="fade-up">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="order-2 md:order-1">
                            <h2 class="text-3xl font-bold mb-6 text-gray-900">End-User Devices and Infrastructure</h2>
                            <div class="w-16 h-1 bg-primary-600 mb-6"></div>
                            <p class="text-gray-600 mb-6">
                                We provide, install, and deploy modern technology devices such as computers, printers,
                                servers, networking equipment, along with robust IT infrastructure solutions that ensure
                                security and optimize business workflows.
                            </p>
                            <ul class="space-y-3 text-gray-600 mb-6">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Supply and installation of computers, laptops, and workstations</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Server infrastructure setup and maintenance</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Networking equipment configuration and optimization</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Peripheral devices and accessories</span>
                                </li>
                            </ul>
                            <a href=""
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        <div class="order-1 md:order-2">
                            <a href="{{ route('fe.edi') }}"
                                class="relative rounded-xl overflow-hidden shadow-xl cursor-pointer">
                                <img src="{{ asset('blog_imgs/blog1.jpg') }}" alt="End-User Devices and Infrastructure"
                                    class="w-full h-auto">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 Detail -->
                <div class="mb-20" data-aos="fade-up">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div>
                            <a href="{{ route('fe.sdsi') }}"
                                class="relative rounded-xl overflow-hidden shadow-xl cursor-pointer">
                                <img src="{{ asset('blog_imgs/blog2.jpg') }}"
                                    alt="Software Development and System Integration" class="w-full h-auto">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            </a>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold mb-6 text-gray-900">Software Development and System Integration
                            </h2>
                            <div class="w-16 h-1 bg-primary-600 mb-6"></div>
                            <p class="text-gray-600 mb-6">
                                We develop specialized software tailored to the specific needs of each business, ranging
                                from ERP and CRM systems to custom software solutions for industries such as aviation,
                                airports, logistics, and more. We also offer system integration services, connecting various
                                software and devices into a unified, synchronized ecosystem.
                            </p>
                            <ul class="space-y-3 text-gray-600 mb-6">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Custom software development for specific business needs</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>ERP and CRM system implementation</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>System integration and API development</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Industry-specific solutions (aviation, logistics, etc.)</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 Detail -->
                <div class="mb-20" data-aos="fade-up">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="order-2 md:order-1">
                            <h2 class="text-3xl font-bold mb-6 text-gray-900">Cybersecurity Solutions</h2>
                            <div class="w-16 h-1 bg-primary-600 mb-6"></div>
                            <p class="text-gray-600 mb-6">
                                With the increasing risk of cyberattacks and growing security requirements, An Hung provides
                                comprehensive cybersecurity solutions, ranging from firewalls and network security to data
                                protection services and disaster recovery, ensuring the safety and security of the
                                enterprise's IT systems.
                            </p>
                            <ul class="space-y-3 text-gray-600 mb-6">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Network security and firewall implementation</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Data protection and encryption services</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Disaster recovery planning and implementation</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Security audits and vulnerability assessments</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        <div class="order-1 md:order-2">
                            <a href="{{ route('fe.cs') }}"
                                class="relative rounded-xl overflow-hidden shadow-xl cursor-pointer">
                                <img src="{{ asset('blog_imgs/blog3.jpg') }}" alt="Cybersecurity Solutions"
                                    class="w-full h-auto">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 Detail -->
                <div data-aos="fade-up">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div>
                            <a href="{{ route('fe.cis') }}"
                                class="relative rounded-xl overflow-hidden shadow-xl cursor-pointer">
                                <img src="{{ asset('blog_imgs/blog4.jpg') }}" alt="Comprehensive IT Solutions"
                                    class="w-full h-auto">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            </a>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold mb-6 text-gray-900">Comprehensive IT Solutions</h2>
                            <div class="w-16 h-1 bg-primary-600 mb-6"></div>
                            <p class="text-gray-600 mb-6">
                                Our comprehensive IT solutions empower businesses with advanced infrastructure, cloud
                                integration, and
                                proactive support services. From optimizing workflows to ensuring seamless system
                                operations, we provide
                                innovative solutions tailored to your needs.
                            </p>
                            <ul class="space-y-3 text-gray-600 mb-6">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Advanced IT infrastructure setup and management</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Cloud migration and hybrid cloud solutions</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Automated monitoring and IT support</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-primary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Data backup and disaster recovery planning</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
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
    </section>

    <!-- Our Approach Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Our Approach</h2>
                <div class="w-24 h-1 bg-primary-600 mx-auto mb-8"></div>
                <p class="text-xl text-gray-600">
                    We follow a systematic approach to deliver high-quality IT solutions that meet your business needs.
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="bg-white rounded-xl shadow-md p-8 relative transition-all duration-300 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="absolute -top-5 -left-5 w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            1
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 mt-4">Consultation</h3>
                        <p class="text-gray-600">
                            We begin by understanding your business requirements, challenges, and goals through detailed
                            consultations with your team.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-white rounded-xl shadow-md p-8 relative transition-all duration-300 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="absolute -top-5 -left-5 w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            2
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 mt-4">Solution Design</h3>
                        <p class="text-gray-600">
                            Our experts design customized solutions tailored to your specific needs, ensuring optimal
                            performance and scalability.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-white rounded-xl shadow-md p-8 relative transition-all duration-300 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="absolute -top-5 -left-5 w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            3
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 mt-4">Implementation</h3>
                        <p class="text-gray-600">
                            We implement the solutions with minimal disruption to your business operations, ensuring a
                            smooth transition.
                        </p>
                    </div>

                    <!-- Step 4 -->
                    <div class="bg-white rounded-xl shadow-md p-8 relative transition-all duration-300 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="absolute -top-5 -left-5 w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            4
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 mt-4">Testing</h3>
                        <p class="text-gray-600">
                            Rigorous testing ensures that all systems and solutions work as expected and meet the highest
                            quality standards.
                        </p>
                    </div>

                    <!-- Step 5 -->
                    <div class="bg-white rounded-xl shadow-md p-8 relative transition-all duration-300 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="absolute -top-5 -left-5 w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            5
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 mt-4">Training</h3>
                        <p class="text-gray-600">
                            We provide comprehensive training to your team to ensure they can effectively use and manage the
                            new systems.
                        </p>
                    </div>

                    <!-- Step 6 -->
                    <div class="bg-white rounded-xl shadow-md p-8 relative transition-all duration-300 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="600">
                        <div
                            class="absolute -top-5 -left-5 w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            6
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900 mt-4">Ongoing Support</h3>
                        <p class="text-gray-600">
                            Our relationship doesn't end with implementation. We provide ongoing support and maintenance to
                            ensure your systems continue to perform optimally.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Customers Section -->
    {{-- <section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-gray-900">Our Customers</h2>
            <div class="w-24 h-1 bg-primary-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">
                We're proud to work with leading organizations across various industries.
            </p>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center justify-items-center" data-aos="fade-up">
            <!-- Customer Logos -->
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer1.png') }}" alt="Customer 1" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer2.png') }}" alt="Customer 2" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer3.png') }}" alt="Customer 3" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer4.png') }}" alt="Customer 4" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer5.png') }}" alt="Customer 5" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer6.png') }}" alt="Customer 6" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer7.png') }}" alt="Customer 7" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer8.png') }}" alt="Customer 8" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer9.png') }}" alt="Customer 9" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer10.png') }}" alt="Customer 10" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer11.png') }}" alt="Customer 11" class="max-h-12 max-w-full">
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-24 w-full">
                <img src="{{ asset('images/customers/customer12.png') }}" alt="Customer 12" class="max-h-12 max-w-full">
            </div>
        </div>
    </div>
</section> --}}
@endsection
