@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updateTitle/{{$teamTitles->id}}" method="post">
    <div class="container">
        <div>
        <textarea name="title" id="" cols="30" value="{{$teamTitles->title}}" rows="10">{{$teamTitles->title}}</textarea>
        </div>
        @csrf
        <button class="btn btn-success mt-4">Change</button>
    </div>
</form>
@stop