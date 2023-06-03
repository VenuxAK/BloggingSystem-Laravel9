<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Blogs</div>
    </div>
    @foreach ($blogs as $blog)
        <div class="row pb-4">
            <div class="col-md-5">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img">
                        @if ($blog->image)
                            <img src="/storage/{{ $blog->image }}" alt="" />
                        @else
                            <img src="/assets/images/nathan-mcbride-229637.jpg" alt="" />
                        @endif
                    </div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-7 animate-box">
                <p>
                    <a href="/blogs/{{ $blog->slug }}" class="fh5co_magna py-2"> {{ $blog->title }} </a>
                </p>
                <p class="fh5co_mini_time"> {{ $blog->author->name }} -
                    {{ $blog->created_at->format('M j, Y') }} </p>
                <div class="fh5co_consectetur"> {!! $blog->body !!} </div>
            </div>
        </div>
    @endforeach
    @if (!Request::is('/'))
        {{ $blogs->links() }}
    @endif
</div>
