<div>
    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Categories</div>
</div>
<div class="clearfix"></div>
<div class="fh5co_tags_all">
    @foreach ($categories as $category)
        <a href="/?category={{ $category->slug }}" class="fh5co_tagg">{{ $category->name }}</a>
    @endforeach
</div>
