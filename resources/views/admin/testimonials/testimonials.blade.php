@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <div class="row">
        @foreach($testimonials as $testimonial) 
        <div class="col-3">
        <p>{{$testimonial->text}}</p>
            <img height="220px" width="220px" src="{{asset('img/team/'.$testimonial->team->image)}}" alt="">
            <br>
            <p>Nom : {{$testimonial->team->name}}</p>
            <p>Fonction : {{$testimonial->team->function}}</p>
            <button class="btn btn-success mt-4 mr-2"><a href="/edit-testimonial/{{$testimonial->id}}" class="text-light">Edit</a></button>
            <form action="/delete-testimonial/{{$testimonial->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mt-2">Delete</button><br><br>
            </form>
        </div>
        @endforeach
        <div class="col-3 text-center" style="font-size: 100px;">
                <a href="/createTestimonial"><i class="fas fa-user-plus"></i></a>
            </div>
    </div>
</div>
@stop