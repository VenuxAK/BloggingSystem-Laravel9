<?php

namespace App\View\Components;

use App\Models\Blog;
use Illuminate\View\Component;

class CategoryBlogs extends Component
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
        return view('components.category-blogs', [
            "blogs" => Blog::latest()->filter(request(['category']))->paginate(6)->withQueryString()
        ]);
    }
}
