<?php

namespace App\Http\Controllers;

use App\Department;
use App\Student;
use Illuminate\Http\Request;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Input;
use Image;
class StudentsController extends Controller
{
    public function create(){
        return view('students.create')->with('departmens', Department::all());
    }
    public function store(Request $request){
        $this->validate($request,[
            'f_name' => 'required',
            'l_name' => 'required',
            'featured' => 'required|image',
            'gender' => 'required',
            'grade_maths' => 'int|nullable',
            'grade_literature' => 'int|nullable',
            'grade_biology' => 'int|nullable'
        ]);
        $featured = $request->file('featured');
        $featured_new_name = time() .  $featured->getClientOriginalName();
        $featured->move('uploads/students' , $featured_new_name);
        $student = new Student([
            'f_name' => $request->post('f_name'),
            'l_name' => $request->post('l_name'),
            'featured' => 'uploads/students/' . $featured_new_name,
            'department_id' => $request->post('departmant_id'),
            'gender' => $request->post('gender'),
            'grade_maths' => $request->post('grade_maths'),
            'grade_literature' => $request->post('grade_literature'),
            'grade_biology' => $request->post('grade_biology')
        ]);
        $student->save();

        return redirect()->route('department.index');
    }
    public function delete($id)
        {
            $student = Student::find($id);
            $student->delete();

                return redirect()->route('department.index');

        }
    public function show($id){
        return view('students.show')->with('student', Student::find($id));
    }
    public function edit($id){
        return view('students.edit')->with('student', Student::find($id))->with('departments',  Department::all());
        return redirect()->back();
    }
    public function save(Request $request, $id){
        $this->validate($request,[
            'f_name' => 'required',
            'l_name' => 'required',
            'featured' => 'nullable|image',
            'gender' => 'required',
            'grade_maths' => 'int|nullable',
            'grade_literature' => 'int|nullable',
            'grade_biology' => 'int|nullable'
        ]);
        $student = Student::find($id);
        if($request->hasFile('featured')){
            $featured = $request->file('featured');
            $featured_new_name = time() .  $featured->getClientOriginalName();
            $featured->move('uploads/students' , $featured_new_name);
            $student->featured = 'uploads/students/' . $featured_new_name;
        }
        $student->f_name = $request->post('f_name');
        $student->l_name = $request->post('l_name');
        $student->department_id = $request->post('departmant_id');
        $student->gender = $request->post('gender');
        $student->grade_maths = $request->post('grade_maths');
        $student->grade_literature = $request->post('grade_literature');
        $student->grade_biology = $request->post('grade_biology');
        $student->save();
        return redirect()->back();
    }
}
