<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Users Table</h4>
                    @can('superAdmin')
                        @if (Request::is('admin/users'))
                            <p class="card-description">
                                <a href="/admin/users/create" class="btn btn-outline-primary">Create new user</a>
                            </p>
                        @endif
                    @endcan
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Role</th>
                            <th>Gender</th>
                            <th>Created Date</th>
                            @can('superAdmin')
                                @if (Request::is('admin/users'))
                                    <th>Actions</th>
                                @endif
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->id }} </td>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td>
                                    @if ($user->avatar)
                                        <img src="/storage/{{ $user->avatar }}"style="object-fit:cover" alt="">
                                    @else
                                        NULL
                                    @endif
                                </td>
                                <td> {{ $user->role ? ucwords(str_replace('_', ' ', $user->role)) : 'NULL' }} </td>
                                <td> {{ $user->gender ? ucwords($user->gender) : 'NULL' }} </td>
                                <td> {{ $user->created_at->format('M j Y') }} </td>
                                <td>
                                    <div class="d-flex">
                                        @can('superAdmin')
                                            @if (Request::is('admin/users'))
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
                                            @endif
                                        @endcan
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
