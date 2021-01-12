@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updateTeam/{{$team->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div>
            <div class="row">
                <div class="col-8"><img height="300px" width="500px" src="{{asset('img/team/'.$team->image)}}" alt=""><br></div>
                <div class="col-4">
                <input type="file" name="image">
                <input type="text" name="name" value="{{$team->name}}" id="">
                <input type="text" name="function" value="{{$team->function}}" id=""><br>
                <button class="btn btn-primary mt-4 ">change</button>
                </div>
            </div>


        </div>
        
    </div>
</form>
@stop