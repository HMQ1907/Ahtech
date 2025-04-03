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
                <img src="{{ asset('blog_imgs/blog3.jpg')}}" alt="Cybersecurity Solutions" class="w-full h-auto">
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
                    Cybersecurity Solutions are a set of measures, technologies, processes, and services implemented to protect an organization's network systems, data, and IT resources from threats, cyberattacks, and unauthorized access. The goal of these solutions is to ensure the security, integrity, and availability of network services while minimizing risks related to data loss, fraud, and financial damage to the business.
                </p>
                <p class="text-gray-700 mb-8">
                    Cybersecurity solutions not only include security software and technologies but also encompass security policies, control processes, and security awareness training for employees. As technology continues to advance and cyber threats become more sophisticated, implementing a comprehensive cybersecurity solution is critical to protecting organizations and businesses.
                </p>
            </div>
            
            <!-- Key Components -->
            <div class="mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </span>
                    Key Components of Cybersecurity Solutions
                </h2>
                
                <!-- Network Security -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Network Security
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Firewall</h4>
                                    <p class="text-gray-700">A firewall is software or hardware used to control network traffic between internal networks and external networks (the Internet). It is responsible for blocking unauthorized access to the network, preventing external attacks, and monitoring the connections between systems within the internal network.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Intrusion Detection and Prevention System (IDS/IPS)</h4>
                                    <p class="text-gray-700">IDS (Intrusion Detection System) and IPS (Intrusion Prevention System) monitor and detect unusual network activities or signs of unauthorized intrusion into the system. While IDS identifies potential threats, IPS not only detects but also has the ability to prevent these threats in real-time.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">3</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Virtual Private Network (VPN)</h4>
                                    <p class="text-gray-700">A VPN allows users to securely connect to the network remotely over the Internet, ensuring the confidentiality and privacy of data transmitted through public networks.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">4</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Identity and Access Management (IAM)</h4>
                                    <p class="text-gray-700">IAM solutions help define and control user access to critical resources and systems within an organization. Measures such as Multi-Factor Authentication (MFA) enhance security when logging in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Data Security -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                            </svg>
                            Data Security
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Data Encryption</h4>
                                    <p class="text-gray-700">Encryption is a key method for protecting data, ensuring that even if data is leaked or stolen, it cannot be read without the decryption key.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Data Backup and Recovery</h4>
                                    <p class="text-gray-700">Backup solutions protect critical data from loss due to incidents such as ransomware attacks, hardware failures, or natural disasters. Data recovery is the process of restoring the system to normal operation after an attack or failure.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">3</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Sensitive Data Management</h4>
                                    <p class="text-gray-700">These solutions help identify, protect, and control access to sensitive data, such as personal, financial, and customer information.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Application Security -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            Application Security
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Application Security Testing</h4>
                                    <p class="text-gray-700">Identifying and eliminating security vulnerabilities in software and applications through security tests like penetration testing, code analysis, and application security assessments.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Patch Management</h4>
                                    <p class="text-gray-700">Managing software updates and patching is critical to reducing security vulnerabilities. This process helps address weaknesses in software before attackers can exploit them.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Endpoint Security -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                            Endpoint Security
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Antivirus and Antimalware</h4>
                                    <p class="text-gray-700">Antivirus and antimalware software detect and prevent threats from malicious software such as viruses, trojans, ransomware, spyware, and adware.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Mobile Device Management (MDM)</h4>
                                    <p class="text-gray-700">MDM solutions help protect and manage mobile devices within an organization, ensuring they comply with security policies and are not compromised or have their data stolen.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">3</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Endpoint Protection</h4>
                                    <p class="text-gray-700">Endpoint devices, including desktops, laptops, and mobile devices, need to be protected from threats coming from the Internet or other external sources through security software and physical security measures.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Security Information and Event Management (SIEM) -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Security Information and Event Management (SIEM)
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">SIEM Systems</h4>
                                    <p class="text-gray-700">SIEM is a solution that collects security events from various sources (servers, firewalls, IDS/IPS, endpoints, etc.) to analyze, monitor, and detect abnormal activities or signs of an attack.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">User Behavior Analytics (UBA)</h4>
                                    <p class="text-gray-700">UBA systems help detect abnormal user behaviors within the system, thereby identifying signs of cyberattacks, fraudulent activities, or unauthorized access to critical data.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cloud Security -->
                <div class="mb-10">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                            Cloud Security
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Cloud Data Security</h4>
                                    <p class="text-gray-700">Security solutions for cloud environments include data encryption, access control, and protection against network threats and breaches within cloud services.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center">
                                        <span class="text-primary-600 font-bold text-sm">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Security for SaaS, PaaS, and IaaS Services</h4>
                                    <p class="text-gray-700">Cloud service providers must ensure the security of their cloud computing models, including Software-as-a-Service (SaaS), Platform-as-a-Service (PaaS), and Infrastructure-as-a-Service (IaaS).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Our Cybersecurity Approach -->
            <div class="mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </span>
                    Our Cybersecurity Approach
                </h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Comprehensive Security Assessment</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We conduct thorough security assessments to identify vulnerabilities in your systems, applications, and networks, providing a clear roadmap for strengthening your security posture.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Customized Security Solutions</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We design and implement tailored security solutions that address your specific business needs, industry requirements, and risk profile, ensuring optimal protection.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Proactive Threat Monitoring</h3>
                        </div>
                        <p class="text-gray-700 ml-14">Our advanced monitoring systems continuously scan for threats and suspicious activities, allowing us to detect and respond to potential security incidents before they cause damage.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Security Policies & Compliance</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We help develop and implement comprehensive security policies and ensure compliance with industry regulations and standards such as GDPR, HIPAA, PCI DSS, and ISO 27001.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary-50 to-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Security Training & Awareness</h3>
                        </div>
                        <p class="text-gray-700 ml-14">We provide comprehensive security awareness training for your employees, helping them understand security risks and best practices to create a strong human firewall against cyber threats.</p>
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
                        An Hung Technology is a leading provider of cybersecurity solutions in Vietnam, specializing in comprehensive security services that protect businesses from evolving cyber threats and ensure data integrity.
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
                        <img src="{{ asset('images/services/integrated-it.jpg') }}" alt="Integrated IT Solutions" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <a href="#" class="block">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">Integrated IT Solutions</h3>
                        </a>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Comprehensive IT solutions that integrate various technologies to optimize your business operations and drive growth.
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
                        <img src="{{ asset('images/services/software-development.jpg') }}" alt="Software Development" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <a href="#" class="block">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 hover:text-primary-600 transition-colors">Software Development</h3>
                        </a>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Custom software solutions designed to meet your specific business needs and streamline your operations.
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