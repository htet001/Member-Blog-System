@extends('layout.master')

@section('titlte','Home')

@section('content')

<style>
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

.fullscreen {
    height: calc(100vh - 20vh);
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

@if(session('message'))
<div id="alert" class="alert-container text-center">
    {{ session('message') }}
</div>
<div class="fullscreen">
    <h1>PhP WiTh LaRaVeL </h1>
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
@endsection