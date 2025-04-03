<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Blog::select('id', 'title_vi', 'title_en', 'short_description_vi', 'short_description_en', 'image', 'slug', 'is_active', 'created_at');

            if ($request->filled('title')) {
                $query->where(function($q) use ($request) {
                    $q->where('title_vi', 'like', '%' . $request->input('title') . '%')
                      ->orWhere('title_en', 'like', '%' . $request->input('title') . '%');
                });
            }

            if ($request->filled('status') && in_array($request->input('status'), ['0', '1'])) {
                $query->where('is_active', $request->input('status'));
            }

            if ($request->filled('date_from')) {
                $query->whereDate('created_at', '>=', $request->input('date_from'));
            }

            if ($request->filled('date_to')) {
                $query->whereDate('created_at', '<=', $request->input('date_to'));
            }

            $blogs = $query->latest()->paginate(10);

            if ($request->ajax()) {
                if ($blogs->isEmpty()) {
                    return response()->json(['error' => 'Không tìm thấy bài viết phù hợp.']);
                }
                $view = view('blogs.table', ['blogs' => $blogs])->render();
                $paginationLinks = $blogs->links()->toHtml();
                return response()->json(['html' => $view, 'pagination_links' => $paginationLinks]);
            }

            return view('blogs.index', ['blogs' => $blogs]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        return view('blogs.add_edit', [
            'title' => 'Thêm bài viết mới',
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title_vi' => 'required|string|max:255',
                'title_en' => 'required|string|max:255',
                'short_description_vi' => 'required|string',
                'short_description_en' => 'required|string',
                'content_vi' => 'required',
                'content_en' => 'required',
                'is_active' => 'required|boolean',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $blog = new Blog();
            $blog->title_vi = $validated['title_vi'];
            $blog->title_en = $validated['title_en'];
            $blog->short_description_vi = $validated['short_description_vi'];
            $blog->short_description_en = $validated['short_description_en'];
            $blog->content_vi = $validated['content_vi'];
            $blog->content_en = $validated['content_en'];
            $blog->is_active = $validated['is_active'];
            $blog->slug = Str::slug($validated['title_en']);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('blog_images', 'public');
                $blog->image = 'storage/' . $imagePath;
            }

            $blog->save();

            return response()->json(['success' => 'Bài viết đã được tạo thành công.', 'redirect' => route('blog.index')]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.add_edit', [
            'title' => 'Chỉnh sửa bài viết',
            'blog' => $blog
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'title_vi' => 'required|string|max:255',
                'title_en' => 'required|string|max:255',
                'short_description_vi' => 'required|string',
                'short_description_en' => 'required|string',
                'content_vi' => 'required',
                'content_en' => 'required',
                'is_active' => 'required|boolean',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $blog = Blog::findOrFail($id);
            $blog->title_vi = $validated['title_vi'];
            $blog->title_en = $validated['title_en'];
            $blog->short_description_vi = $validated['short_description_vi'];
            $blog->short_description_en = $validated['short_description_en'];
            $blog->content_vi = $validated['content_vi'];
            $blog->content_en = $validated['content_en'];
            $blog->is_active = $validated['is_active'];
            $blog->slug = Str::slug($validated['title_en']);

            if ($request->hasFile('image')) {
                // Remove old image if exists
                if ($blog->image && file_exists(public_path($blog->image))) {
                    unlink(public_path($blog->image));
                }
                
                $imagePath = $request->file('image')->store('blog_images', 'public');
                $blog->image = 'storage/' . $imagePath;
            }

            $blog->save();

            return response()->json(['success' => 'Bài viết đã được cập nhật thành công.', 'redirect' => route('blog.index')]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function delete($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
            
            $blog->delete();
            
            return response()->json(['success' => 'Bài viết đã được xóa thành công.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
