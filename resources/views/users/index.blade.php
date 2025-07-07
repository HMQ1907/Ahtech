@extends('layout.app')

@section('title', 'User Management')

@section('content')
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex flex-wrap items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">User Management</h2>
                <button id="addUserBtn"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-medium text-sm text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add New User
                </button>
            </div>
        </div>

        <!-- Search Filters -->
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="user_name" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="text" id="user_name" name="name"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-2 sm:text-sm border-gray-300 rounded-md"
                            placeholder="Search by username">
                    </div>
                </div>

                <div>
                    <label for="user_email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="text" id="user_email" name="email"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-2 sm:text-sm border-gray-300 rounded-md"
                            placeholder="Search by email">
                    </div>
                </div>

                <div>
                    <label for="user_is_active" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select id="user_is_active" name="is_active"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option value="">All Statuses</option>
                        <option value="1">Active</option>
                        <option value="0">Blocked</option>
                    </select>
                </div>
            </div>

            <div class="mt-4 flex flex-wrap gap-3">
                <button type="button" id="search-user"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Search
                </button>
                <button id="delete-search-user"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                    Clear
                </button>
            </div>
        </div>

        <!-- User Table -->
        @include('users.table')
    </div>

    <!-- Add/Edit User Modal -->
    <div id="addEditUserModal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- Modal panel -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                <div class="bg-white px-6 pt-6 pb-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-semibold text-gray-900" id="title_form">Thêm người dùng mới</h3>
                        <button type="button" class="text-gray-400 hover:text-gray-600 transition-colors"
                            data-dismiss="modal">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Form -->
                    <form id="userForm" class="space-y-6">
                        @csrf

                        <!-- Name and Email Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Họ tên</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="name" name="name"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Nhập họ tên">
                                </div>
                                <span id="nameError" class="text-sm text-red-600"></span>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <input type="email" id="email" name="email"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Nhập email">
                                </div>
                                <span id="emailError" class="text-sm text-red-600"></span>
                            </div>
                        </div>

                        <!-- Password and Confirm Password Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mật
                                    khẩu</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>
                                    <input type="password" id="password" name="password"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Nhập mật khẩu">
                                </div>
                                <span id="passwordError" class="text-sm text-red-600"></span>
                            </div>

                            <div>
                                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-2">Xác
                                    nhận mật khẩu</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <input type="password" id="confirm_password"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Xác nhận mật khẩu">
                                </div>
                            </div>
                        </div>

                        <!-- User Group and Status Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="group_user" class="block text-sm font-medium text-gray-700 mb-2">Nhóm người
                                    dùng</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <select id="group_user" name="group_user"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-10 py-3 sm:text-sm border-gray-300 rounded-md appearance-none">
                                        <option value="admin">Quản trị viên</option>

                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Trạng thái</label>
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <input id="is_active" name="is_active" type="checkbox"
                                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                                            checked>
                                        <label for="is_active" class="ml-2 block text-sm text-gray-900">Kích hoạt</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Error Alert -->
                        <div id="alert_error"
                            class="text-sm text-red-600 bg-red-50 border border-red-200 rounded-md p-3 hidden"></div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="bg-gray-50 px-6 py-4 flex flex-col sm:flex-row-reverse sm:px-6">
                    <button id="create_edit_user" type="button"
                        class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-150 sm:ml-3 sm:w-auto">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Thêm người dùng
                    </button>
                    <button type="button"
                        class="mt-3 w-full inline-flex justify-center items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-150 sm:mt-0 sm:ml-3 sm:w-auto"
                        data-dismiss="modal">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Hủy bỏ
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')
    <script src="{{ asset('js/handle_users.js') }}"></script>
    <script>
        let search_user_url = "{{ route('user.index') }}";
        let create_user_url = "{{ route('user.create') }}";
        let detail_user_url = "{{ route('user.detail', ['id' => ':id']) }}";
        let edit_user_url = "{{ route('user.update', ['id' => ':id']) }}";
        let delete_user_url = "{{ route('user.delete', ['id' => ':id']) }}";
        let block_user_url = "{{ route('user.block', ['id' => ':id']) }}";

        // Modal functionality
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('addEditUserModal');
            const addUserBtn = document.getElementById('addUserBtn');
            const cancelBtn = document.querySelector('[data-dismiss="modal"]');

            // Show modal
            addUserBtn.addEventListener('click', function() {
                modal.classList.remove('hidden');
            });

            // Hide modal
            cancelBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
            });

            // Close modal when clicking outside
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    </script>
@endpush
