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
                            <th>Body</th>
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
                                    {{-- <a href="/admin/blogs/{{ $blog->slug }}"> --}}
                                    <a href="#">
                                        {{ substr($blog->title, 0, 25) . '...' }}
                                    </a>
                                </td>
                                <td>
                                    {!! substr($blog->body, 0, 30) . '...' !!}
                                </td>
                                <td> NULL </td>
                                <td>
                                    {{ $blog->created_at->diffForHumans() }}
                                </td>
                                <td>
                                    <div class="d-flex">
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
