<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach ($trendingBlogs as $blog)
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img">
                            @if ($blog->image)
                                <img src="/storage/{{ $blog->image }}" alt=""
                                    class="fh5co_img_special_relative" />
                            @else
                                <img src="/assets/images/allef-vinicius-108153.jpg" alt=""
                                    class="fh5co_img_special_relative" />
                            @endif
                        </div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="/blogs/{{ $blog->slug }}" class="text-white"> {{ $blog->title }} </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> {{ $blog->author->name }} -
                                {{ $blog->created_at->format('M j, Y') }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
