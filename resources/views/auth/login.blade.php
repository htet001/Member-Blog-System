@extends('layout.master')

@section('title','Login Page')

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

.alert-container {
    position: fixed;
    width: 100%;
    padding: 15px;
    background-color: #4CAF50;
    color: #fff;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.alert-show {
    opacity: 0.9;
}
</style>

@if(session('register_success'))
<div id="alert" class="alert-container text-center">
    {{ session('register_success') }}
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        document.getElementById('alert').classList.remove('alert-show');
    }, 3000);
    // Triggering a reflow to apply the initial class for the transition
    document.getElementById('alert').offsetHeight;
    document.getElementById('alert').classList.add('alert-show');
});
</script>
@endif


<form method="post" action="/login">
    <div class="container-fluid" style="margin-top: 120px;">
        <div class="row">
            <div class="col-md-6 col-sm-12 mx-auto">
                <div class="registration-form" style="margin: 0px 20px 0px 20px;">
                    <h2 class="text-center mb-4">Login Form</h2>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                        <p>Don't Have an account? <a href="/register" class="text-danger">Register</a></p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" style="margin-left: 30px;">Login</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection