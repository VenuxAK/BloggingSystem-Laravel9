<x-admin.layout>
    <x-admin.header name="Edit User" />
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit user</h4>
                    <form action="/admin/users/{{ $user->username }}/edit" method="POST" class="forms-sample mt-4">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" name="username" class="form-control" id="inputUsername"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail3"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" name="gender" id="exampleSelectGender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <select class="form-control" name="role" id="exampleSelectGender">
                                <option>Admin</option>
                                <option>Super Admin</option>
                                <option>Manager</option>
                                <option>Normal User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
                        <a href="/admin/users" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
