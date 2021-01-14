@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updateContact/{{$editContact->id}}" method="post">
    @csrf
    <div class="container">
        <label for="">Titre : <br><input type="text" name="title" value="{{$editContact->title}}"></label><br>
        <label for="">Adresse : <br> <input class="text-center" type="text" name="place" value="{{$editContact->place}}">
        </label><br>
        <label for="">Telephone : <br> <input class="text-center" type="text" name="phone" value="{{$editContact->phone}}">
        </label><br>
        <label for="">Mail : <br><input class="text-center" type="text" name="mail" value="{{$editContact->mail}}">
        </label><br>
    </div>
    <button class="btn btn-success mt-4">Update</button>
</form>
@stop