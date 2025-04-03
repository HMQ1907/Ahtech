@extends('layout.auth')
@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-900 p-4 sm:p-6 lg:p-8">
        <!-- Background pattern -->
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.2\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')">
            </div>
        </div>

        <div class="w-full max-w-md relative z-10">
            <!-- Card with elegant design -->
            <div class="bg-gray-800 rounded-xl shadow-2xl overflow-hidden border border-gray-700">
                <!-- Header with subtle gradient -->
                <div class="bg-gradient-to-r from-gray-800 to-gray-900 pt-10 px-8 sm:px-12 border-b border-gray-700">
                    <div class="flex justify-center mb-6">
                        <!-- Elegant logo placeholder -->
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-900" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-center text-2xl font-bold text-white mb-2">Welcome Back</h2>
                    <p class="text-center text-gray-400 mb-8">Sign in to your account to continue</p>
                </div>

                <!-- Form with elegant styling -->
                <div class="p-8 sm:p-12">
                    @if (session()->has('error'))
                        <div class="mb-6 p-4 rounded-lg bg-red-900/30 border border-red-800/50">
                            <p class="text-red-400 text-sm">{{ session('error') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="post" class="space-y-6">
                        @csrf

                        <!-- Email field with elegant styling -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <input type="email" id="email" name="email"
                                    class="block w-full pl-10 pr-3 py-3 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent shadow-sm"
                                    placeholder="your@email.com">
                            </div>
                            @if ($errors->has('email') || session()->has('email_wrong'))
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $errors->first('email') ?? session('email_wrong') }}
                                </p>
                            @endif
                        </div>

                        <!-- Password field with elegant styling -->
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="password" id="password" name="password"
                                    class="block w-full pl-10 pr-3 py-3 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent shadow-sm"
                                    placeholder="••••••••">
                            </div>
                            @if ($errors->has('password') || session()->has('password_wrong'))
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $errors->first('password') ?? session('password_wrong') }}
                                </p>
                            @endif
                        </div>

                        <!-- Remember me with elegant styling -->
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox"
                                class="h-4 w-4 bg-gray-700 border-gray-600 rounded text-amber-500 focus:ring-amber-500 focus:ring-offset-gray-800">
                            <label for="remember" class="ml-2 block text-sm text-gray-300">
                                Remember me
                            </label>
                        </div>

                        <!-- Submit button with elegant styling -->
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-gray-900 bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-500 hover:to-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-amber-500 transition-all duration-200">
                                Sign in
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
