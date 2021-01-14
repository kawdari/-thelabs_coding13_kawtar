@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
@foreach($Contact2 as $Contact2)
        <h2>{{$Contact2->title}}</h2>
        <p>{{$Contact2->texte}}</p>
        @endforeach
  <a href="/editContact2/{{$Contact2->id}}" class="btn btn-primary mt-4 mr-2">Edit</a><br><hr> 
        @foreach($contact as $contact)
        <h2>{{$contact->title}}</h2>
        <p>{{$contact->place}}</p>
        <p>{{$contact->phone}}</p>
        <p>{{$contact->mail}}</p>
        @endforeach
    <a href="/editContact/{{$contact->id}}" class="btn btn-primary mt-4 mr-2">Edit</a>
</div>
@stop