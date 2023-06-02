<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            "blogs" => Blog::latest()->limit(7)->get(),
            "users" => User::latest()->limit(5)->get()
        ]);
    }

    public function blogs()
    {
        return view('admin.blogs', [
            "blogs" => Blog::latest()->paginate(10)->withQueryString()
        ]);
    }
    public function showBlog(Blog $blog)
    {
        return view('admin.show-blog', [
            "blog" => $blog
        ]);
    }
    public function createBlog()
    {
        return view('admin.create-blog', [
            "categories" => Category::latest()->get()
        ]);
    }
    public function storeBlog()
    {
        $validatedData = request()->validate([
            "title" => ["required", "max:254", Rule::unique('blogs', 'title')],
            "category_id" => ["required", Rule::exists('categories', 'id')],
            "thumbnail" => ["required", "max:254"],
            "body" => ["required", "min:10"]
        ], [
            "category_id.required" => "The category field is required.",
            "category_id.exists" => "The selected category is invalid."
        ]);

        $validatedData["slug"] = str()->slug($validatedData["title"]);
        $validatedData["image"] = request()->file('thumbnail')->store('thumbnail');
        $validatedData["user_id"] = auth()->user()->id;
        Blog::create($validatedData);
        return redirect('/admin/blogs')->with('message', 'Blog created successful');
    }
    public function editBlog(Blog $blog)
    {
        return view('admin.edit-blog', [
            "blog" => $blog,
            "categories" => Category::latest()->get()
        ]);
    }
    public function updateBlog(Blog $blog)
    {
        $validatedData = request()->validate([
            "title" => ["required", "max:254", Rule::unique('blogs', 'title')->ignore($blog->id)],
            "category_id" => ["required", Rule::exists('blogs', 'category_id')],
            "thumbnail" => ["max:254"],
            "body" => ["required", "min:10"]
        ], [
            "category_id.required" => "The category field is required.",
            "category_id.exists" => "The selected category is invalid."
        ]);
        $validatedData["slug"] = str()->slug($validatedData['title']);
        $validatedData["image"] = request()->file() ? request()->file('thumbnail')->store('thumbnail') : $blog->image;
        $validatedData["user_id"] = auth()->user()->id;
        $blog->update($validatedData);
        return redirect('/admin/blogs')->with('message', "Blog updated successful");
    }
    public function deleteBlog(Blog $blog)
    {
        $blog->delete();
        return redirect('/admin/blogs')->with('message', 'Blog deleted successful');
    }
}
