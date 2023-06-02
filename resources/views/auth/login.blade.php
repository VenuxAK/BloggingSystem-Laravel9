<x-layout>
    <div style="width:100vw;height:100vh;display:grid;place-items:center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-6 col-lg-5">
                    <div class="card p-3">
                        <div class="card-header">
                            <h5>Login</h5>
                        </div>
                        <div class="card-body mt-3">
                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="errors">
                                @error('errors')
                                    <p class="text-danger"> {{ $message }} </p>
                                @enderror
                                <div class="form-group">
                                    <label for="inputEmail">Email address</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" id="inputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter email">
                                    @error('email')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword"
                                        placeholder="Password">
                                    @error('password')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <p> Don't have an account? <a href="/register" style="color: #777">Register</a> </p>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
