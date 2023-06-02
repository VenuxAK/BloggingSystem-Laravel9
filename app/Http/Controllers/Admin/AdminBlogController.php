<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function showBlog()
    {
    }
    public function createBlog()
    {
        return view('admin.create-blog', [
            "categories" => Category::latest()->get()
        ]);
    }
    public function storeBlog()
    {
    }
    public function editBlog(Blog $blog)
    {
        return view('admin.edit-blog', [
            "blog" => $blog,
            "categories" => Category::latest()->get()
        ]);
    }
    public function updateBlog()
    {
    }
    public function deleteBlog()
    {
    }
}
