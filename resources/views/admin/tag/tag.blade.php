@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <h2>Create a tag : </h2>
    <form action="/addTag" method="POST">
        @csrf
        <label for="name" class="mt-3">Name of tag: <br><input type="text" name="name" id="name"></label><br>
        <button type="submit">Add</button>
    </form>
    <br>
    <hr> 
    <div class="row">
        <div class="col-4">
            <div class="card"> 
                <h2>Tags : </h2>   
            
                @foreach($tag as $tag)
                <h4 >{{$tag->name}}</h4>
                <a href="/editTag/{{$tag->id}}" class="btn btn-success ">Edit</a>
                <form action="/deleteTag/{{$tag->id}}" method="POST">
                            @csrf
                    <button type="submit" class="btn btn-danger mt-2">Delete</button><br><br>
                </form>
                </div>
                </div> 
                @endforeach
                </div>
            </div>
        </div>
    
@stop