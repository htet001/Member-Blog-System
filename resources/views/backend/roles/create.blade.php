@extends('layout.master')
@section('title','Create Role')
@section('content')
<style>
#roleCreate {
    margin-top: 50px;
    background-color: #EEEEDC;
}

#form {
    padding: 30px;
}
</style>
<div class="container col-md-8 col-md-offset-2" id="roleCreate">
    <div class="well well bs-component">
        <form method="post" id="form">
            @foreach($errors->all() as $error)
            <p class="alert alert-danger">{!!$error!!}</p>
            @endforeach
            @if(session('status'))
            <p class="alert alert-success">{{session('status')}}</p>
            @endif
            <legend class="text-center">Insert A Role</legend>
            {{csrf_field()}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Insert Role Name">
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</div>
@endsection