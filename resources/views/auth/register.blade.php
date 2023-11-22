@extends('layout.master')

@section('title','Register Page')

@section('content')
<style>
.registration-form {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
}

.btn-primary {
    background-color: #28a745;
    border-color: #28a745;
}

.btn-primary:hover {
    background-color: #218838;
    border-color: #218838;
}
</style>
<form method="post" action="/register">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 mx-auto">
                <div class="registration-form" style="margin: 0px 20px 0px 20px;">
                    <h2 class="text-center mb-4">Register Form</h2>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{old('name')}}">
                        @error('name')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{old('email')}}">
                        @error('email')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="current-password">
                        @error('password')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3" style="padding: 0px 30px 0px 30px;">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                            autocomplete="current-password">
                        @error('confirmPassword')
                        <span class="text mt-1" style="color: red;font-size:15px;">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" style="margin-left: 30px;">Register</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection