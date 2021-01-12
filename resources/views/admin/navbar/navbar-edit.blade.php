@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <form action="/update-navbar/{{$navbar->id}}" method="post">
    <div class="container ">

        <div class="d-flex justify-content-around input-group-text" >
            <input class="input-group-text" type="text" name="nav1" value="{{$navbar->nav1}}">
            <input class="input-group-text" type="text" name="nav2" value="{{$navbar->nav2}}">
            <input class="input-group-text" type="text" name="nav3" value="{{$navbar->nav3}}">
            <input class="input-group-text" type="text" name="nav4" value="{{$navbar->nav4}}">
        </div>
        @csrf
        <button class="btn btn-success mt-4 mr-2 d-flex justify-content-center">Change</button>
    </div>
</form>
</div>

@stop