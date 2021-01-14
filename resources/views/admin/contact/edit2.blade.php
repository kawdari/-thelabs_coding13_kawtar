@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updateContact2/{{$editContact2->id}}" method="post">
    @csrf
    <div class="container">
        <label for="">Titre: <br><input type="text" name="title" value="{{$editContact2->title}}"></label><br>
        <label for="">Texte: <br> <textarea name="texte" value="{{$editContact2->texte}}" cols="30" rows="10">{{$editContact2->texte}}</textarea></label><br>
    </div>
    <button class="btn btn-success mt-4">CHANGE</button>
</form>
@stop