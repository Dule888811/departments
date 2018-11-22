@extends('layout')

@section('content')
    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form action = "/department/store" method="post">
        {{csrf_field()}}
        <div class="form-input">
            <label for="name"> Name</label>
            <input type="text" name="name">
        </div>

        <div class="form-input">
            <label for="class">Class</label>
            <input type="text" name="class">
        </div>
        <div class="form-input">
            <button type="submit">Submit</button>
        </div>
    </form>

@stop