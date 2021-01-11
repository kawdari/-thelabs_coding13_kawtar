@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
        @foreach($texteCaroussel  as $text)
        <p style="font-size: 50px;">{{$text->text}}</p>
        @endforeach
{{--     <a href="/editCarousselTexte/{{$texteCaroussel->id}}" class="btn btn-primary mt-4 mr-2">Edit Texte</a>
 --}}</div>
@stop