@extends('layout')

@section('content')
    @foreach($students as $student)
        <ul class="dep">
            <li>First Name: {{$student->f_name}}</li>
            <li>Last Name: {{$student->l_name}}</li>
            <li><a class="del" href ="{{route('student.delete',['id' => $student->id])}}">Delete</a></li>
            <li><a class="del" href ="{{route('student.show',['id' => $student->id])}}">Show</a></li>
            <li><a class="del" href ="{{route('student.edit',['id' => $student->id])}}">Edit</a></li>
            <hr>
        </ul>
    @endforeach
    <a href="{{route('student.create')}}">Insert new student</a>
@stop