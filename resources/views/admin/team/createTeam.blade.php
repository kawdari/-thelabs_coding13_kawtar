@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <form action="/addTeam" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image" class="mt-3">Insert an image<br><input type="file" name="image" id="image" class="w-50"></label><br>
        <label for="name" class="mt-3">Name/firstname: <br><input type="text" name="name" id="nom" class="w-50"></label><br>
        <label for="function" class="mt-3">function : <br><input type="text" name="function" id="fonction" class="w-50"></label><br>
        <button type="submit">Add</button>
    </form>
</div>
@stop