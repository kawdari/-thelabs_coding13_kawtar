@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <div class="bg-warning text-dark pt-3 pb-2">
        @foreach($nav as $navbar)
        <ul style="list-style-type: none;justify-content:end;" class="d-flex justify-content-around">
        <li>{{$navbar->nav1}}</li>
        <li>{{$navbar->nav2}}</li>
        <li>{{$navbar->nav3}}</li>
        <li>{{$navbar->nav4}}</li>
        </ul>
        @endforeach
    </div>
    <a href="/edit-navbar/{{$navbar->id}}" class="btn btn-success mt-4 mr-2 d-flex justify-content-center">EDIT NAVBAR</a>
</div>
@stop