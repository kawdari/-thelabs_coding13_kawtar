@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updateCarousselTexte/{{$textss->id}}" method="post">
    <div class="container">
        <div>
        <textarea name="text" id="" cols="30" value="{{$textss->text}}" rows="10">{{$textss->text}}</textarea>
        </div>
        @csrf
        <button class="btn btn-success mt-4">Change</button>
    </div>
</form>
@stop