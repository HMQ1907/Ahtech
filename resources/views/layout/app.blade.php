<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    @stack('head')
</head>

<body class="h-full">
    <div x-data="{ sidebarOpen: false }">
        <!-- Mobile sidebar backdrop -->
        <div x-show="sidebarOpen" class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 lg:hidden"
            x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="sidebarOpen = false">
        </div>

        <!-- Mobile sidebar -->
        <div x-show="sidebarOpen" class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 lg:hidden"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full">
            <!-- Mobile sidebar content -->
            <div class="flex h-full flex-col">
                <!-- Logo -->
                <div class="flex h-16 items-center justify-between px-4 bg-gray-800">
                    <div class="flex items-center">
                        <img class="h-8 w-auto" src=""
                            alt="Your Company">
                        <span class="ml-3 text-xl font-semibold text-white">Dashboard</span>
                    </div>
                    <button @click="sidebarOpen = false" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 space-y-1 px-2 py-4 bg-gray-900">
                    <a href="{{ route('blog.index') }}"
                        class="group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('blog.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-4 h-6 w-6 flex-shrink-0 {{ request()->routeIs('blog.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                        Bài viết
                    </a>

                    <a href="{{ route('customer.index') }}"
                        class="group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('customer.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-4 h-6 w-6 flex-shrink-0 {{ request()->routeIs('customer.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        Khách hàng
                    </a>

                    <a href="{{ route('user.index') }}"
                        class="group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('user.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-4 h-6 w-6 flex-shrink-0 {{ request()->routeIs('user.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        User
                    </a>

                    <a href="{{ route('partner.index') }}"
                        class="group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('partner.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-4 h-6 w-6 flex-shrink-0 {{ request()->routeIs('partner.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        Đối tác
                    </a>

                </nav>

                <!-- Mobile user menu -->
                <div class="border-t border-gray-700 p-4 bg-gray-800">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center">
                                <span class="text-lg font-medium text-white">
                                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                                </span>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-base font-medium text-white">{{ Auth::user()->name ?? 'User' }}</p>
                            <form method="POST" action="{{ route('logout') }}" class="mt-1">
                                @csrf
                                <button type="submit" class="text-sm font-medium text-gray-400 hover:text-white">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
            <div class="flex min-h-0 flex-1 flex-col bg-gray-900">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex h-16 items-center px-4 bg-gray-800 cursor-pointer">
                    <img class="h-8 w-auto" src="{{ asset('images/logo2.png') }}"
                        alt="Your Company">
                </a>

                <!-- Desktop Navigation -->
                <nav class="flex-1 space-y-1 px-2 py-4">
                    <a href="{{ route('blog.index') }}"
                        class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('blog.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 {{ request()->routeIs('blog.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                        Bài viết
                    </a>

                    <a href="{{ route('customer.index') }}"
                        class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('customer.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 {{ request()->routeIs('customer.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        Khách hàng
                    </a>

                    <a href="{{ route('user.index') }}"
                        class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('user.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 {{ request()->routeIs('user.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        User
                    </a>

                    <a href="{{ route('partner.index') }}"
                        class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('partner.index') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 {{ request()->routeIs('partner.index') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 17.25l3.25-3.25m0 0L12 10.75m3.25 3.25H7.75m7.5 0H19M4.75 10.75L8 14m0 0l-3.25 3.25m3.25-3.25h7.5" />
                        </svg>
                        Đối tác
                    </a>

                </nav>

                <!-- Desktop user menu -->
                <div class="border-t border-gray-700 p-4 bg-gray-800">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center">
                                <span class="text-lg font-medium text-white">
                                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                                </span>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">{{ Auth::user()->name ?? 'User' }}</p>
                            <form method="POST" action="{{ route('logout') }}" class="mt-1">
                                @csrf
                                <button type="submit" class="text-xs font-medium text-gray-400 hover:text-white">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="lg:pl-64">
            <!-- Top bar -->
            <div
                class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <!-- Mobile menu button -->
                <button type="button" class="text-gray-700 lg:hidden" @click="sidebarOpen = true">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <!-- Breadcrumb -->
                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                    <div class="flex items-center">
                        <h1 class="text-lg font-semibold leading-7 text-gray-900">
                            @yield('title', 'Dashboard')
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Main content area -->
            <main class="py-6">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
