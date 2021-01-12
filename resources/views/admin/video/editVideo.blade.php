@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updateVideo/{{$editVideo->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <label for="">Change the video image: <br><input type="file" name="image" id=""></label><br>
        <label for="">Change the link:<br><textarea name="url" value="{{$editVideo->url}}" id="" cols="30" rows="10">{{$editVideo->url}}</textarea></label><br>
        <button class="btn btn-success mt-4">Change</button>
    </div>
</form>
@stop