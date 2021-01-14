@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">

<form action="/updateTag/{{$editTag->id}}" method="post">
    @csrf
    <div class="container">
        <div class="card">
        <label  class="card-title" for="">Name of tag: <input class="card-text" type="text" name="name" value="{{$editTag->name}}"></label><br>
        <button class="btn btn-success mt-4">Change</button>
        </div>
    </div>

</form>
</div>
@stop
