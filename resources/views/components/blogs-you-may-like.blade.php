@props(['category_id'])
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Blogs You May Like
            </div>
        </div>
        <?php
        use App\Models\Blog;
        $blogYouMayLike = Blog::where('category_id', $category_id)
            ->inRandomOrder()
            ->take(6)
            ->get();
        ?>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach ($blogYouMayLike as $blog)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="/assets/images/39-324x235.jpg" alt="" /></div>
                        <div>
                            <a href="/blogs/{{ $blog->slug }}" class="d-block fh5co_small_post_heading">
                                <span class=""> {{ substr($blog->title, 0, 30). "..." }} </span>
                            </a>
                            <div class="c_g">
                                <i class="fa fa-clock-o"></i> {{ $blog->created_at->format('M j, Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
