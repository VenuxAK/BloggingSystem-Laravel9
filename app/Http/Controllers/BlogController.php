<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function blogs()
    {
        return view('blogs');
    }
    public function show(Blog $blog)
    {
        return view('show', [
            'blog' => $blog
        ]);
    }

    public function storeComment(Blog $blog)
    {
        request()->validate([
            "body" => "required|string"
        ], ['body.required' => 'Empty comment'] );

        Comment::create([
            "body" => request()->body,
            "user_id" => Auth::id(),
            "blog_id" => $blog->id,
        ]);

        return redirect()->back();
    }
}
