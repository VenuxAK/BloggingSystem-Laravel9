<?php

namespace App\View\Components;

use App\Models\Blog;
use Illuminate\View\Component;

class LatestBlogs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-blogs', [
            "latestBlogs" => Blog::latest()->limit(4)->get()
        ]);
    }
}
