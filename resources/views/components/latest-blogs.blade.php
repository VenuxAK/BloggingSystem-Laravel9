<div>
    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Latest Blogs</div>
</div>
@foreach ($latestBlogs as $blog)
    <div class="row pb-3">
        <div class="col-5 align-self-center">
            @if ($blog->image)
                <img src="/storage/{{ $blog->image }}" alt="img" class="fh5co_most_trading" />
            @else
                <img src="/assets/images/download (1).jpg" alt="img" class="fh5co_most_trading" />
            @endif
        </div>
        <div class="col-7 paddding">
            <div class="most_fh5co_treding_font">
                <a href="/blogs/{{ $blog->slug }}" style="color: #555">{{ $blog->title }}</a>
            </div>
            <div class="most_fh5co_treding_font_123"> {{ $blog->created_at->format('M j, Y') }}</div>
        </div>
    </div>
@endforeach
