@extends('layout')

@section('content')
    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form action = "{{route('student.save',['id' => $student->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-input">
            <label for="departmant">Select departmant</label>
            <select name="departmant_id">
                @foreach($departments as $department)
                    <option selected="selected" value="{{$student->department_id}}">{{$student->department->name}}</option>
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-input">
            <label for="gender">Select gender</label>
            <select name="gender">
                <option selected="selected" value="{{$student->gender}}">{{$student->gender}}</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="form-input">
            <label for="f_name">First name</label>
            <input type="text" value="{{$student->f_name}}" name="f_name">
        </div>

        <div class="form-input">
            <label for="l_name">Last name</label>
            <input type="text" value="{{$student->l_name}}" name="l_name">
        </div>

        <div class="form-input">
            <label for="grade_maths">Grade maths</label>
            <input type="text" value="{{$student->grade_maths}}" name="grade_maths">
        </div>

        <div class="form-input">
            <label for="grade_literature">Grade literature</label>
            <input type="text" value="{{$student->grade_literature}}" name="grade_literature">
        </div>

        <div class="form-input">
            <label for="grade_biology">Grade biology</label>
            <input type="text" value="{{$student->grade_biology}}" name="grade_biology">
        </div>

        <div class="form-input">
            <label for="featured">featured image</label>
            <input type="file" name="featured">
        </div>

        <div class="form-input">
            <button type="submit">Submit</button>
        </div>
    </form>
@stop