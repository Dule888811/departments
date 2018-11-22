<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use App\Department;
class DepartmentsController extends Controller
{
    public function index()
    {
        $departments =  Department::all();
        foreach($departments as $department){
            $department->name =  $department->name;
            $department->class = $department->class;
            $department->num_strudents = count($department->students);
            $department->save();
        }
        return view('departments.welcome')->with('departments', Department::all());
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'class' => 'required|int'
        ]);
        $department = new Department([
            'name' => $request->post('name'),
            'class' => $request->post('class')
        ]);
        $department->save();
        return redirect()->back();
    }
    public function delete($id){
        $department = Department::find($id);
        $department->delete();
        return redirect()->back();
    }
    public function edit($id){
        return view('departments.edit')->with('department',  Department::find($id));
        return redirect()->back();
    }
    public function save(Request $request, $id){
        $department = Department::find($id);
        $department->name = $request->post('name');
        $department->class = $request->post('class');
        $department->save();
        return redirect()->back();
    }
    public function show($id){
        return view('departments.show')->with('students',  Department::find($id)->students);
    }
}
