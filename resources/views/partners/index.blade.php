@extends('layout.app')

@section('title', 'Quản lý đối tác')

@section('content')
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex flex-wrap items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">Quản lý đối tác</h2>
                <a href="{{ route('partner.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-medium text-sm text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Thêm đối tác mới
                </a>
            </div>
        </div>

        <!-- Search Filters -->
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Tên đối tác</label>
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" id="name" name="name"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-2 sm:text-sm border-gray-300 rounded-md"
                            placeholder="Tìm kiếm theo tên">
                    </div>
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Trạng thái</label>
                    <select id="status" name="status"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option value="">Tất cả trạng thái</option>
                        <option value="1">Đang hoạt động</option>
                        <option value="0">Không hoạt động</option>
                    </select>
                </div>

                <div>
                    <label for="date_range" class="block text-sm font-medium text-gray-700 mb-1">Ngày tạo</label>
                    <div class="flex space-x-2">
                        <div class="relative rounded-md shadow-sm flex-1">
                            <input type="date" id="date_from" name="date_from"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-3 pr-3 py-2 sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <span class="flex items-center text-gray-500">đến</span>
                        <div class="relative rounded-md shadow-sm flex-1">
                            <input type="date" id="date_to" name="date_to"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-3 pr-3 py-2 sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex flex-wrap gap-3">
                <button type="button" id="search-partner"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Tìm kiếm
                </button>
                <button id="clear-search"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                    Xóa bộ lọc
                </button>
            </div>
        </div>

        <!-- Partners Table -->
        <div id="table-partner-info">
            @include('partners.table')
        </div>
    </div>
@endsection

@push('head')
    <script src="{{ asset('js/handle_partners.js') }}"></script>
    <script>
        let search_partner_url = "{{ route('partner.index') }}";
        let create_partner_url = "{{ route('partner.store') }}";
        let edit_partner_url = "{{ route('partner.update', ['id' => ':id']) }}";
        let delete_partner_url = "{{ route('partner.delete', ['id' => ':id']) }}";
        let toggle_status_partner_url = "{{ route('partner.toggle-status', ['id' => ':id']) }}";
    </script>
@endpush
