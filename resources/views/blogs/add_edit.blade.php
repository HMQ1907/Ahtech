@extends('layout.app')

@section('title', $title)

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Thông tin bài viết sẽ được hiển thị công khai trên trang web.
                    </p>

                    <div class="mt-6">
                        <nav class="flex flex-col space-y-3">
                            <a href="#vietnamese-content"
                                class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Nội dung tiếng Việt</a>
                            <a href="#english-content" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Nội
                                dung tiếng Anh</a>
                            <a href="#image-section" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Hình
                                ảnh</a>
                            <a href="#settings" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Cài
                                đặt</a>
                        </nav>
                    </div>

                    <div class="mt-8">
                        <div id="image-section" class="border-t border-gray-200 pt-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Hình ảnh</h3>
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div id="image-preview" class="mb-4 {{ isset($blog) && $blog->image ? '' : 'hidden' }}">
                                        <img id="preview-image" class="mx-auto h-40 w-auto object-cover rounded-md"
                                            src="{{ isset($blog) && $blog->image ? asset($blog->image) : '' }}"
                                            alt="">
                                    </div>
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="image-upload"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Tải lên hình ảnh</span>
                                            <input id="image-upload" name="image" type="file" class="sr-only"
                                                accept="image/png, image/jpeg, image/jpg">
                                        </label>
                                        <p class="pl-1">hoặc kéo thả</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, JPEG tối đa 2MB
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button id="remove-image" type="button"
                                    class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 {{ isset($blog) && $blog->image ? '' : 'hidden' }}">
                                    <svg class="-ml-0.5 mr-1.5 h-4 w-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                    Xóa hình ảnh
                                </button>
                            </div>
                            <span id="image-error" class="text-sm text-red-600"></span>
                        </div>

                        <div id="settings" class="border-t border-gray-200 pt-6 mt-8">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Cài đặt</h3>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="is_active" name="is_active" type="checkbox"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                        {{ isset($blog) && $blog->is_active ? 'checked' : 'checked' }}>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="is_active" class="font-medium text-gray-700">Kích hoạt</label>
                                    <p class="text-gray-500">Bài viết sẽ được hiển thị công khai trên trang web.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form id="blog-form" data-blog-id="{{ isset($blog) ? $blog->id : '' }}">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <!-- Vietnamese Content -->
                        <div id="vietnamese-content" class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Nội dung tiếng Việt</h3>

                            <div>
                                <label for="title_vi" class="block text-sm font-medium text-gray-700">Tiêu đề</label>
                                <div class="mt-1">
                                    <input type="text" name="title_vi" id="title_vi"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                                        placeholder="Nhập tiêu đề bài viết"
                                        value="{{ isset($blog) ? $blog->title_vi : '' }}">
                                </div>
                                <span id="title-vi-error" class="text-sm text-red-600"></span>
                            </div>

                            <div>
                                <label for="short_description_vi" class="block text-sm font-medium text-gray-700">Mô tả
                                    ngắn</label>
                                <div class="mt-1">
                                    <textarea id="short_description_vi" name="short_description_vi" rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                                        placeholder="Nhập mô tả ngắn về bài viết">{{ isset($blog) ? $blog->short_description_vi : '' }}</textarea>
                                </div>
                                <span id="short-description-vi-error" class="text-sm text-red-600"></span>
                            </div>

                            <div>
                                <label for="content_vi" class="block text-sm font-medium text-gray-700">Nội dung</label>
                                <div class="mt-1">
                                    <textarea id="content_vi" name="content_vi" rows="10"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md ckeditor p-2 border"
                                        placeholder="Nhập nội dung bài viết">{!! isset($blog) ? $blog->content_vi : '' !!}</textarea>
                                </div>
                                <span id="content-vi-error" class="text-sm text-red-600"></span>
                            </div>
                        </div>

                        <!-- English Content -->
                        <div id="english-content" class="px-4 py-5 bg-gray-50 space-y-6 sm:p-6 border-t border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Nội dung tiếng Anh</h3>

                            <div>
                                <label for="title_en" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1">
                                    <input type="text" name="title_en" id="title_en"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                                        placeholder="Enter blog title" value="{{ isset($blog) ? $blog->title_en : '' }}">
                                </div>
                                <span id="title-en-error" class="text-sm text-red-600"></span>
                            </div>

                            <div>
                                <label for="short_description_en" class="block text-sm font-medium text-gray-700">Short
                                    Description</label>
                                <div class="mt-1">
                                    <textarea id="short_description_en" name="short_description_en" rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                                        placeholder="Enter a short description of the blog">{{ isset($blog) ? $blog->short_description_en : '' }}</textarea>
                                </div>
                                <span id="short-description-en-error" class="text-sm text-red-600"></span>
                            </div>

                            <div>
                                <label for="content_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <div class="mt-1">
                                    <textarea id="content_en" name="content_en" rows="10"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md ckeditor p-2 border"
                                        placeholder="Enter blog content">{!! isset($blog) ? $blog->content_en : '' !!}</textarea>
                                </div>
                                <span id="content-en-error" class="text-sm text-red-600"></span>
                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 border-t border-gray-200">
                            <a href="{{ route('blog.index') }}"
                                class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
                                Hủy
                            </a>
                            <button type="button" id="save-blog"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ isset($blog) ? 'Cập nhật' : 'Tạo bài viết' }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('head')
    {{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}
    <script src="{{ asset('js/handle_blogs.js') }}"></script>

    <script>
        let create_blog_url = "{{ route('blog.store') }}";
        let update_blog_url = "{{ route('blog.update', ['id' => ':id']) }}";
    </script>
@endpush
