<x-layout>
    <div style="width:100vw;height:100vh;display:grid;place-items:center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-6 col-lg-5">
                    <div class="card p-3">
                        <div class="card-header">
                            <h5>Register</h5>
                        </div>
                        <div class="card-body mt-3">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control is-invalid" name="name"
                                        value="{{ old('name') }}" id="inputName" placeholder="Enter Your Name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <p class="text-danger"> {{ $message }} </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername">Username</label>
                                    <input type="text" class="form-control is-invalid" name="username"
                                        value="{{ old('username') }}" id="inputUsername" placeholder="Enter Username">
                                    @error('username')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email address</label>
                                    <input type="email" class="form-control is-invalid" id="inputEmail" name="email"
                                        value="{{ old('email') }}" placeholder="Enter email">
                                    @error('email')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control is-invalid" id="inputPassword"
                                        name="password" value="{{ old('password') }}" placeholder="Password">
                                    @error('password')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <p> Already have an account? <a href="/login" style="color: #777">Login</a> </p>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
