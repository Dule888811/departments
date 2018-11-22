@extends('layout')

@section('content')

        <ul class="dep">
            <li>First Name: {{$student->f_name}}</li>
            <li>Last Name: {{$student->l_name}}</li>
            <li>Gender: {{$student->gender}} </li>
            <li>Grade maths: {{$student->grade_maths}}</li>
            <li>Grade literature: {{$student->grade_literature}}</li>
            <li>Grade biology: {{$student->grade_biology}}</li>
            <li>Department: {{$student->department->name}}</li>
            <li><img src="{{$student->featured}}" alt="no image" width="50px" height="50px"></li>
            <hr>
        </ul>
@stop