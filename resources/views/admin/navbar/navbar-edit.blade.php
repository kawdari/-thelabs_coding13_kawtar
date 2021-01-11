@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <form action="/update-navbar/{{$navbar->id}}" method="post">
    <div class="container">
        <div>
            <input type="text" name="nav1" value="{{$navbar->nav1}}">
            <input type="text" name="nav2" value="{{$navbar->nav2}}">
            <input type="text" name="nav3" value="{{$navbar->nav3}}">
            <input type="text" name="nav4" value="{{$navbar->nav4}}">
        </div>
        @csrf
        <button class="btn btn-success mt-4">Change</button>
    </div>
</form>
</div>

@stop