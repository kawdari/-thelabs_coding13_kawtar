@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form action="/updatePresentation/{{$editPres->id}}" method="post">
    <div class="container">
        <div>
        <div class="text-center">
            <input type="text" name="title" value="{{$editPres->title}}">
        </div>
            <div class="row">
                <div class="col-6 text-center"><textarea name="text1" id="" value="{{$editPres->text1}}" cols="30" rows="10">{{$editPres->text1}}</textarea></div>
                <div class="col-6 text-center"><textarea name="text2" id="" value="{{$editPres->text2}}" cols="30" rows="10">{{$editPres->text2}}</textarea></div>
            </div>
            <div class="text-center">
            <input class="text-center" type="text" name="button" value="{{$editPres->button}}">
            </div>
        </div>
        @csrf
        <button class="btn btn-success mt-4">Change</button>
    </div>
</form>
@stop

