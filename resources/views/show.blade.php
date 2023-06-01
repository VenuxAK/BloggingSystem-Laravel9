<x-layout>
    {{-- <x-blog-detail /> --}}
    <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <h3> {{ $blog->title }} </h3>
                    <div class="d-flex justify-content-between">
                        <p> {{ $blog->author->name }} - {{ $blog->created_at->format('M j, Y') }} </p>
                        <p> {{ $blog->category->name }} </p>
                    </div>
                    <img src="/assets/images/camila-cordeiro-114636.jpg" class="img-fluid" alt="">
                    <div class="body my-3 text-muted"> {!! $blog->body !!} </div>
                    <x-comments-wrapper />
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <x-categories />
                    <x-latest-blogs />
                </div>
            </div>
        </div>
    </div>
    <x-blogs-you-may-like :category_id="$blog->category_id" />
</x-layout>
