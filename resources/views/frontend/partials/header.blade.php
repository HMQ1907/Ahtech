<header x-data="{ isOpen: false, isScrolled: false }" x-init="window.addEventListener('scroll', () => { isScrolled = window.pageYOffset > 20 })"
    :class="{ 'bg-white/90 dark:bg-gray-900/90 backdrop-blur-md shadow-md': isScrolled, 'bg-transparent': !isScrolled }"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('fe.home') }}" class="flex items-center space-x-2 cursor-pointer">
                    <img src="{{ asset('images/logo2.png') }}" alt="An Hung Logo" class="h-10">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('fe.home') }}"
                    class="text-gray-700  cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors duration-200">Home</a>
                <a href="{{ route('fe.about') }}"
                    class="text-gray-700  cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors duration-200">About</a>
                <a href="{{ route('fe.service') }}"
                    class="text-gray-700  cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors duration-200">Services</a>
                <a href="{{ route('fe.contact') }}"
                    class="text-gray-700  cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors duration-200">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen"
                class="md:hidden p-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none">
                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4" class="md:hidden py-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('fe.home') }}"
                    class="text-gray-700 cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Home</a>
                <a href="{{ route('fe.about') }}"
                    class="text-gray-700 cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">About</a>
                <a href="{{ route('fe.service') }}"
                    class="text-gray-700 cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Services</a>
                <a href="{{ route('fe.contact') }}"
                    class="text-gray-700 cursor-pointer dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Contact</a>
            </div>
        </div>
    </div>
</header>
<div class="h-20"></div>
