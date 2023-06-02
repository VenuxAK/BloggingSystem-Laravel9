<x-admin.layout>
    {{-- <x-admin.header name="Single Blog" /> --}}
    <div class="row justify-content-center">
        <div class="col-12 col-lg-11">
            <h4> {{ $blog->title }} </h4>
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="">
                    <p class="m-0 p-0"> {{ $blog->author->name }} - {{ $blog->created_at->diffForHumans() }} </p>
                    <p class="m-0 p-0"> {{ $blog->category->name }} </p>
                </div>
                <div class="">
                    <div class="d-flex">
                        <a href="/admin/blogs/{{ $blog->slug }}/edit"
                            class="btn btn-sm btn-outline-success m-1">Edit</a>
                        <form action="/admin/blogs/{{ $blog->slug }}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger m-1"
                                onclick="return confirm('Are you sure want to delete')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="my-4" style="width:300px;object-fit:cover">
                <img src="/storage/{{ $blog->image }}" class="img-fluid" alt="">
            </div>
            <div>
                {!! $blog->body !!}
            </div>
        </div>
    </div>
</x-admin.layout>
