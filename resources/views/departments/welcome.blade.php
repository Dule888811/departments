@extends('layout')

@section('content')

    @foreach($departments as $deperment)
        <ul class="dep">
       <li>deperment: {{$deperment->name}}<a class="del" href ="{{route('department.delete',['id' => $deperment->id])}}">Delete</a><br>class:{{$deperment->class}}<a class="del" href ="{{route('department.edit',['id' => $deperment->id])}}">Edit</a><br>Number of students:{{count($deperment->students)}}<a class="del" href ="{{route('department.show',['id' => $deperment->id])}}">Show</a></li>
        </ul>
        <hr>
    @endforeach
    <a href="{{route('department.create')}}">Create new department</a>
@stop