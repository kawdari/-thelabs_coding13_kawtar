@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
        @foreach($texteCaroussel  as $text)
        <p style="font-size: 50px;">{{$text->text}}</p>
        <a href="/editCarousselTexte/{{$text->id}}" class="btn btn-success mt-4 mr-2">EDIT Text</a>
        @endforeach
{{-- <a href="/editCarousselTexte/{{$textss->id}}" class="btn btn-primary mt-4 mr-2">Edit Texte</a>
 --}}</div>
@stop