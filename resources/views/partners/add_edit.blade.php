@extends('layout.app')

@section('title', $title)

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Thông tin đối tác sẽ được hiển thị công khai trên trang web.
                    </p>

                    <div class="mt-8">
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Logo đối tác</h3>
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div id="logo-preview"
                                        class="mb-4 {{ isset($partner) && $partner->logo ? '' : 'hidden' }}">
                                        <img id="preview-logo" class="mx-auto h-40 w-auto object-contain"
                                            src="{{ isset($partner) && $partner->logo ? asset($partner->logo) : '' }}"
                                            alt="">
                                    </div>
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="logo-upload"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Tải lên logo</span>
                                            <input id="logo-upload" name="logo" type="file" class="sr-only"
                                                accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                        </label>
                                        <p class="pl-1">hoặc kéo thả</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, JPEG, SVG tối đa 2MB
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button id="remove-logo" type="button"
                                    class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 {{ isset($partner) && $partner->logo ? '' : 'hidden' }}">
                                    <svg class="-ml-0.5 mr-1.5 h-4 w-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                    Xóa logo
                                </button>
                            </div>
                            <span id="logo-error" class="text-sm text-red-600"></span>
                        </div>

                        <div class="border-t border-gray-200 pt-6 mt-8">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Cài đặt</h3>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="is_active" name="is_active" type="checkbox"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                        {{ isset($partner) && $partner->is_active ? 'checked' : 'checked' }}>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="is_active" class="font-medium text-gray-700">Kích hoạt</label>
                                    <p class="text-gray-500">Đối tác sẽ được hiển thị công khai trên trang web.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form id="partner-form" data-partner-id="{{ isset($partner) ? $partner->id : '' }}">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Tên đối tác</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name"
                                        class="shadow-sm p-2 border focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Nhập tên đối tác"
                                        value="{{ $partner->name ?? '' }}">
                                </div>
                                <span id="name-error" class="text-sm text-red-600"></span>
                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 border-t border-gray-200">
                            <a href="{{ route('partner.index') }}"
                                class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
                                Hủy
                            </a>
                            <button type="button" id="save-partner"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ isset($partner) ? 'Cập nhật' : 'Tạo đối tác' }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
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
    </script>
@endpush
