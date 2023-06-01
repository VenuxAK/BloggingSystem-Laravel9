<?php

namespace App\View\Components;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\View\Component;

class News extends Component
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
        $category = Category::where('name', 'News')->first();
        return view('components.news', [
            "news" => $category->blogs
        ]);
    }
}
