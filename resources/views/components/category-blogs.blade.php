<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{ ucwords(request('category')) . "'s " }} Blogs
        </div>
    </div>
    <div class="row pb-4">
        @foreach ($blogs as $blog)
            <div class="col-md-6 mb-4">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img">
                        @if ($blog->image)
                            <img src="/storage/{{ $blog->image }}" alt="" />
                        @else
                            <img src="/assets/images/nathan-mcbride-229637.jpg" alt="" />
                        @endif
                    </div>
                    <div class="animate-box">
                        <p class="p-0 m-0">
                            <a href="/blogs/{{ $blog->slug }}" class="fh5co_magna"> {{ $blog->title }} </a>
                        </p>
                        <p class="p-0 m-0"> {{ $blog->author->name }} - {{ $blog->created_at->format('M j, Y') }} </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $blogs->links() }}
</div>
