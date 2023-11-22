@extends('layout.master')
@section('title','All Users')

@section('content')
<style>
.container {
    margin-top: 20px;
}

.well-bs-component {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
}

#userTable {
    width: 100%;
}

#userTable th,
#userTable td {
    text-align: center;
}

#userTable th {
    background-color: #337ab7;
    color: #fff;
}

#userTable tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style>
<div class="container col-md-8 col-md-offset-2">
    <div class="well well-bs-component">
        <table class="table table-bordered" id="userTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection