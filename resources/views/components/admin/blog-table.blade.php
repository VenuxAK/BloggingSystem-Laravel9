<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Blog Table</h4>
                    @if (Request::is('admin/blogs'))
                        <p class="card-description">
                            <a href="/admin/blogs/create" class="btn btn-outline-primary">Create new blog</a>
                        </p>
                    @endif
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    {{ $blog->id }}</td>
                                <td>
                                    {{ strlen($blog->title) > 25 ? substr($blog->title, 0, 25) . '...' : $blog->title }}
                                </td>
                                <td>
                                    {{ $blog->category->name }}
                                </td>
                                <td>
                                    {{ $blog->author->name }}
                                </td>
                                <td>
                                    @if ($blog->image)
                                        <img src="/storage/{{ $blog->image }}" style="object-fit:cover" width="150"
                                            alt="">
                                    @else
                                        NULL
                                    @endif
                                </td>
                                <td>
                                    {{ $blog->created_at->diffForHumans() }}
                                </td>
                                @if (Request::is('admin/blogs'))
                                    <td>
                                        <div class="d-flex">
                                            <a href="/admin/blogs/{{ $blog->slug }}"
                                                class="btn btn-sm btn-info m-1">View</a>
                                            <a href="/admin/blogs/{{ $blog->slug }}/edit"
                                                class="btn btn-sm btn-warning m-1">Edit</a>
                                            <form action="/admin/blogs/{{ $blog->slug }}/delete" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger m-1"
                                                    onclick="return confirm('Are you sure want to delete')">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                @else
                                    <td>
                                        <a href="/admin/blogs/{{ $blog->slug }}"
                                            class="btn btn-sm btn-info m-1">View</a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if (!Request::is('admin/dashboard'))
                <div class="card-footer">
                    {{ $blogs->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
