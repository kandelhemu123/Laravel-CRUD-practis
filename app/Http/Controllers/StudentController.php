<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $students = student::latest()->paginate(10);
    return view('students.index', compact('students'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validate the inputs
       $request->validate ([
        'name' => 'required|min:5',
        'faculty' => 'required|min:5'

       ]);
            
        //create a new student for database store
        Student::create($request->all());
        //redirect the user and send friendly message
        return redirect ()->route('students.index')->with('sucess','student created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'faculty'=>'required',
            //'course_name'=>'required',
            //'address'=>'required',
            //'mobile'=>'required',
            //'symbol_no'=>'required',
            ]);
      $student->update($request->all());
      return redirect()->route('students.index')->with('success','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // delete the student
        $student->delete();
        //redirect the user 
        return redirect()->route('students.index')->with('success','student delete successfully');

    }
}
