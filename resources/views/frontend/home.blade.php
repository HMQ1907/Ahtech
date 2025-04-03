@extends('frontend.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-gray-900 to-primary-900 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary-900/80 to-gray-900/80"></div>
            <div class="absolute inset-0 bg-[url('/img/grid-pattern.svg')] opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center py-20 lg:py-32">
                <!-- Left: Text -->
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0" data-aos="fade-right">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-15">
                        Pioneering <span class="text-primary-400">Comprehensive</span>, <span
                            class="text-primary-400">Sustainable</span>, and <span class="text-primary-400">Effective</span>
                        Digital Transformation
                    </h1>
                </div>

                <!-- Right: Image -->
                <div class="w-full lg:w-1/2 flex justify-center" data-aos="fade-left">
                    <img src="{{ asset('images/banner.png') }}" alt="Digital Transformation" class="max-w-full h-auto ">
                </div>
            </div>
        </div>
    </section>


    <!-- Business Sectors Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Business Sectors</h2>
                <div class="w-24 h-1 bg-primary-600 mx-auto mb-6"></div>
                <p class="max-w-2xl mx-auto text-gray-600 dark:text-gray-400 text-lg">
                    <span class="font-semibold">AN HUNG TECHNOLOGY DEVELOPMENT SOLUTIONS CO., LTD</span> is one of the
                    leading companies in Vietnam specializing in providing IT solutions. We have a mission to deliver
                    advanced technological solutions. An Hung partners with businesses to optimize operations, improve work
                    efficiency, and drive sustainable development in the era of digital transformation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- End-User Devices and Infrastructure -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 transition-all duration-300 hover:shadow-2xl hover:transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-primary-100 dark:bg-primary-900/30 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 dark:text-primary-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">End-User Devices and Infrastructure
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        We provide, install, and deploy modern technology devices such as computers, printers, servers,
                        networking equipment, along with robust IT infrastructure solutions that ensure security and
                        optimize business operations.
                    </p>
                    <a href="{{ route('fe.edi') }}"
                        class="inline-flex items-center text-primary-600 dark:text-primary-400 font-medium hover:text-primary-700 dark:hover:text-primary-300 transition-colors cursor-pointer">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <!-- Software Development and System Integration -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 transition-all duration-300 hover:shadow-2xl hover:transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-primary-100 dark:bg-primary-900/30 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 dark:text-primary-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Software Development and System
                        Integration</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        We develop specialized software tailored to the specific needs of each business, ranging from ERP
                        and CRM systems to custom software solutions for specialized industries, and more. We also offer
                        system integration services, connecting various software and devices into a unified, synchronized
                        ecosystem.
                    </p>
                    <a class="inline-flex items-center text-primary-600 dark:text-primary-400 font-medium hover:text-primary-700 dark:hover:text-primary-300 transition-colors cursor-pointer"
                        href="{{ route('fe.sdsi') }}">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <!-- Comprehensive IT Solutions -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 transition-all duration-300 hover:shadow-2xl hover:transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-primary-100 dark:bg-primary-900/30 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 dark:text-primary-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Comprehensive IT Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Provide comprehensive information technology solutions for various industries, including hardware,
                        software, network devices, application software, security solutions, and IT infrastructure, helping
                        clients operate technology systems efficiently and securely.
                    </p>
                    <a href="{{ route('fe.cis') }}"
                        class="inline-flex items-center text-primary-600 dark:text-primary-400 font-medium hover:text-primary-700 dark:hover:text-primary-300 transition-colors cursor-pointer">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <!-- Cybersecurity Solutions -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 transition-all duration-300 hover:shadow-2xl hover:transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-primary-100 dark:bg-primary-900/30 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 dark:text-primary-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Cybersecurity Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        With the increasing risk of cyberattacks and growing security requirements, An Hung provides
                        comprehensive cybersecurity solutions, ranging from firewalls and network security to data
                        protection services and disaster recovery, ensuring the safety and security of the enterprise IT
                        systems.
                    </p>
                    <a 
                        href="{{ route('fe.cs') }}"
                        class="inline-flex items-center text-primary-600 dark:text-primary-400 font-medium hover:text-primary-700 dark:hover:text-primary-300 transition-colors">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    @include('frontend.partials.partner')

    <!-- Contact Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-12 rounded-2xl overflow-hidden shadow-xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1241417874!2d106.70270371541644!3d10.803084392304533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175290030b60c35%3A0x6e974337764065ef!2sT.T.M%20Building!5e0!3m2!1svi!2s!4v1648123456789!5m2!1svi!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl">
                </iframe>
            </div>
        </div>
    </section>
@endsection
