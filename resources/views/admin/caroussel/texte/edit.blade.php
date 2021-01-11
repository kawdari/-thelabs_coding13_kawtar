@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updateCarousselTexte/{{$texte->id}}" method="post">
    <div class="container">
        <div>
        <textarea name="texte" id="" cols="30" value="{{$texte->texte}}" rows="10">{{$texte->texte}}</textarea>
        </div>
        @csrf
        <button class="btn btn-success mt-4">Change</button>
    </div>
</form>
@stop