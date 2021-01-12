@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    @foreach($teamTitle as $title)
    <h1>{{$title->title}}</h1>
    <button class="btn btn-primary mt-4 mr-2"><a href="/editTitle/{{$title->id}}" class="text-light">Edit</a></button>
 
    
    <form action="/editTitle/{{$title->id}}" method="post">
        @csrf
        <textarea name="title" value="{{$title->title}}" id="" cols="30" rows="10">{{$title->title}}</textarea><br>
        <button class="btn btn-primary mt-4 ">Change</button>
    </form>

    <hr>
    @endforeach
    <div class="row">
      
        @foreach($teams as $team)
        
        <div class="col-3">
            <div class="d-flex justify-content-center">
                <img height="220px" width="220px" src="{{asset('img/team/'.$team->image)}}" alt="">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <p class="mt-2">Name: {{$team->name}}</p>
            </div>
            <div class="d-flex justify-content-center">
                <p>Function: {{$team->function}}</p>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-success mt-1 mr-2"><a href="/editTeam/{{$team->id}}" class="text-light">Edit</a></button>
                <form action="/deleteTeam/{{$team->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger mt-2">Delete</button><br><br>
                </form>
            </div>
            
        </div>
        @endforeach
        <div class="col-3 text-center" style="font-size: 150px;">

                <a href="/createTeam"><i class="fas fa-user-plus"></i></a>
            </div>
    </div>
</div>

@stop