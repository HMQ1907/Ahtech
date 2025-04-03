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
                    <img src="{{ asset('blog_imgs/blog4.jpg') }}" alt="Integrated IT Solutions" class="w-full h-auto">
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
                        Integrated IT Solution is a concept that refers to a set of technologies, services, and software and
                        hardware systems that are designed and deployed in a coordinated manner to help organizations and
                        businesses efficiently manage and operate business processes, optimize productivity, reduce costs,
                        while also meeting requirements for security, scalability, and flexibility in today's digital
                        technology environment.
                    </p>
                </div>

                <!-- Objectives and Benefits -->
                <div class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                        <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </span>
                        Objectives and Benefits of Integrated IT Solutions
                    </h2>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Optimize Operational Performance</h3>
                            <p class="text-gray-700">Helps improve efficiency in business processes, minimize manual tasks,
                                and automate many steps to streamline operations and boost productivity.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Enhance Interaction and Communication</h3>
                            <p class="text-gray-700">Enables departments within the organization to easily connect and
                                collaborate using modern communication and data-sharing tools.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Improve Decision-Making Capabilities</h3>
                            <p class="text-gray-700">Provides analytics and reporting tools that give businesses deeper
                                insights into data, enabling timely and accurate strategic decisions.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Data Security and Protection</h3>
                            <p class="text-gray-700">Ensures that systems, applications, and data are securely protected
                                against cyber threats, maintaining business continuity and trust.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Scalability and Flexibility</h3>
                            <p class="text-gray-700">Offers the ability to easily scale infrastructure and applications as
                                the business grows, allowing companies to adapt to future technology changes.</p>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-md p-6 border-l-4 border-primary-500 hover:shadow-lg transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Cost and Time Savings</h3>
                            <p class="text-gray-700">Reduces maintenance and operational costs by integrating and automating
                                processes, leading to significant long-term savings and efficiency.</p>
                        </div>
                    </div>
                </div>

                <!-- Key Components -->
                <div class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                        <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </span>
                        Key Components of an Integrated IT Solution
                    </h2>

                    <!-- IT Infrastructure -->
                    <div class="mb-10">
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                </svg>
                                IT Infrastructure
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Hardware Systems</h4>
                                        <p class="text-gray-700">Servers, storage devices, networking equipment (routers,
                                            switches, etc.), and end-user devices (PCs, tablets, phones) that form the
                                            physical foundation of your IT environment.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Network and Connectivity</h4>
                                        <p class="text-gray-700">Network infrastructure includes local area networks (LAN),
                                            internet connections, and virtual private network (VPN) solutions to ensure
                                            continuity and security in data transmission.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">3</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Cloud Computing</h4>
                                        <p class="text-gray-700">Cloud computing solutions allow for flexible and
                                            cost-effective infrastructure expansion, supporting services like storage,
                                            computation, and data analytics with minimal upfront investment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Software and Applications -->
                    <div class="mb-10">
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                                Software and Applications
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Enterprise Resource Planning (ERP)
                                        </h4>
                                        <p class="text-gray-700">Software that helps organizations manage core activities
                                            such as accounting, human resources, inventory, production, sales, etc.,
                                            improving efficiency and cost savings in business processes.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Customer Relationship Management
                                            (CRM)</h4>
                                        <p class="text-gray-700">Solutions that help businesses track and manage customer
                                            relationships, improve customer service, and increase revenue through better
                                            customer engagement and retention.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">3</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Project and Task Management
                                            Software</h4>
                                        <p class="text-gray-700">Tools like Microsoft Project, Trello, Jira that help track
                                            project progress, assign tasks, and evaluate departmental work performance for
                                            improved productivity.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">4</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Mobile and Web Applications</h4>
                                        <p class="text-gray-700">Solutions for developing mobile or web applications that
                                            allow organizations to offer easily accessible services to customers, enhancing
                                            user experience and engagement.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">5</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Security Software</h4>
                                        <p class="text-gray-700">Tools and software that protect systems and data from
                                            threats like viruses, malware, and other cyberattacks, ensuring business
                                            continuity and data integrity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Management and Analytics -->
                    <div class="mb-10">
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                </svg>
                                Data Management and Analytics
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Database Management Systems (DBMS)
                                        </h4>
                                        <p class="text-gray-700">Database management systems like MySQL, Oracle, SQL Server
                                            help store, retrieve, and manage enterprise data efficiently and securely.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Big Data and Data Analytics</h4>
                                        <p class="text-gray-700">Tools for data analysis and mining (Big Data, BI tools
                                            like Tableau, Power BI) that help businesses analyze, report, and predict market
                                            trends, enabling strategic decision-making.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">3</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Data Lakes and Data Warehouses</h4>
                                        <p class="text-gray-700">Solutions for managing and storing large data volumes in
                                            data warehouses or data lakes, allowing organizations to handle massive datasets
                                            from various sources for comprehensive analysis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cybersecurity -->
                    <div class="mb-10">
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                Cybersecurity
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">System Security</h4>
                                        <p class="text-gray-700">Solutions to protect servers, end-user devices, and
                                            applications from cyberattacks, ensuring the integrity and availability of
                                            critical business systems.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Identity and Access Management
                                            (IAM)</h4>
                                        <p class="text-gray-700">IAM solutions ensure that only authorized users have
                                            access to important system resources and data, maintaining security while
                                            enabling appropriate access.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">3</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Data Encryption and Security</h4>
                                        <p class="text-gray-700">Encryption tools and data protection solutions safeguard
                                            the integrity and security of enterprise information, both at rest and in
                                            transit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services and Technical Support -->
                    <div class="mb-10">
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Services and Technical Support
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">System Support and Maintenance
                                            Services</h4>
                                        <p class="text-gray-700">IT service providers typically offer 24/7 support to
                                            handle incidents, maintain systems, and ensure IT services run smoothly with
                                            minimal disruption.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Backup and Data Recovery Solutions
                                        </h4>
                                        <p class="text-gray-700">Backup solutions protect critical data and enable fast
                                            recovery in case of incidents, ensuring business continuity and minimizing data
                                            loss.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process Management and Optimization -->
                    <div>
                        <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                Process Management and Optimization
                            </h3>

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">1</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Business Process Management (BPM)
                                        </h4>
                                        <p class="text-gray-700">BPM solutions help optimize business processes within the
                                            organization, boosting work efficiency and reducing waste through systematic
                                            improvement.</p>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-primary-600 font-bold text-sm">2</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Robotic Process Automation (RPA)
                                        </h4>
                                        <p class="text-gray-700">RPA technology automates manual processes with software
                                            robots, improving speed and accuracy in business workflows while reducing human
                                            error.</p>
                                    </div>
                                </div>
                            </div>
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
                            An Hung Technology is a leading provider of integrated IT solutions in Vietnam, specializing in
                            comprehensive technology services that help businesses optimize operations and achieve digital
                            transformation.
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
