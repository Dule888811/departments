<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'DepartmentsController@index',
    'as' =>'department.index'
]);
Route::get('/department/create',[
    'uses' => 'DepartmentsController@create',
    'as' => 'department.create'
]);
Route::get('/department/delete/{id}',[
    'uses' => 'DepartmentsController@delete',
    'as' => 'department.delete'
]);
Route::get('/department/edit/{id}',[
    'uses' => 'DepartmentsController@edit',
    'as' => 'department.edit'
]);
Route::get('/student/create',[
    'uses' => 'StudentsController@create',
    'as' => 'student.create'
]);
Route::post('/department/store',[
    'uses' => 'DepartmentsController@store',
    'as' => 'department.store'
]);
Route::post('/department/save/{id}',[
    'uses' => 'DepartmentsController@save',
    'as' => 'department.save'
]);
Route::post('/student/store',[
    'uses' => 'StudentsController@store',
    'as' => 'student.store'
]);
Route::get('/department/show/{id}',[
    'uses' => 'DepartmentsController@show',
    'as' => 'department.show'
]);
Route::get('/student/delete/{id}',[
    'uses' => 'StudentsController@delete',
    'as' => 'student.delete'
]);
Route::get('/student/show/{id}',[
    'uses' => 'StudentsController@show',
    'as' => 'student.show'
]);
Route::get('/student/edit/{id}',[
    'uses' => 'StudentsController@edit',
    'as' => 'student.edit'
]);
Route::post('/student/save/{id}',[
    'uses' => 'StudentsController@save',
    'as' => 'student.save'
]);
