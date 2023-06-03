<x-admin.layout>
    <x-admin.header name="Create User" />
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create new user</h4>
                    <form action="/admin/users/store" method="POST" enctype="multipart/form-data" class="forms-sample mt-4">
                        @csrf
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="inputName" placeholder="Name">
                            <x-error name="name" />
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}" class="form-control"
                                id="inputUsername" placeholder="Username">
                            <x-error name="username" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                id="exampleInputEmail3" placeholder="Email">
                            <x-error name="email" />
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" name="gender" id="exampleSelectGender">
                                <option value="">Choose Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                            <x-error name="gender" />
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <select class="form-control" name="role" id="exampleSelectGender">
                                <option value="">Select Role</option>
                                <option value="super_admin" {{ old('role') == 'super_admin' ? 'selected' : '' }}>
                                    Super Admin
                                </option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>
                                    Admin
                                </option>
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>
                                    Normal User
                                </option>
                            </select>
                            <x-error name="role" />
                        </div>
                        <div class="form-group">
                            <label>Avatar (Optional) </label>
                            <input type="file" name="avatar" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            <x-error name="avatar" />
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword"
                                placeholder="Password">
                            <x-error name="password" />
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
                        <a href="/admin/users" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
