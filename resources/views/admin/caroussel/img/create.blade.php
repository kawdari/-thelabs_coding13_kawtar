@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <form action="/addCarousselImage" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image" class="mt-3">Insert a image: </label><br>
        <input type="file" name="image" id="image" class="w-50"><br>
        <button type="submit">Add</button>
    </form>
</div>
@stop