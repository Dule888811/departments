@extends('layout')

@section('content')
    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form action = "{{route('department.save',['id' => $department->id])}}" method="post">
        {{csrf_field()}}
        <div class="form-input">
            <label for="name"> Name</label>
            <input type="text" value="{{$department->name}}" name="name">
        </div>

        <div class="form-input">
            <label for="class">Class</label>
            <input type="text" value="{{$department->class}}" name="class">
        </div>
        <div class="form-input">
            <button type="submit">Submit</button>
        </div>
    </form>

@stop