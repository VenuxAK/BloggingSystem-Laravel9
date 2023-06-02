<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Table</h4>
                {{-- <p class="card-description">
                    Add class <code>.table-hover</code>
                </p> --}}
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Role</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->id }} </td>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td> {{ $user->avatar ?? 'NULL' }} </td>
                                <td> {{ $user->role ?? 'NULL' }} </td>
                                <td> {{ $user->created_at->format('M j Y') }} </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/admin/users/{{ $user->username }}/edit"
                                            class="btn btn-sm btn-warning m-1">
                                            Edit
                                        </a>
                                        <form action="/admin/users/{{ $user->username }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger m-1"
                                                onclick="return confirm('Are you sure want to delete user')">
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
        </div>
    </div>
</div>
