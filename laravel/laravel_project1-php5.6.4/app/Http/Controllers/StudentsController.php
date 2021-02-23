<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('pages.students',compact('students') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
      $validateData = $this->validate($request,[
                'first_name'=>'required|alpha|max:10|min:5',
                'last_name'=>'required|alpha|max:10|min:5',
                'gender'=>'required',
                'qualifications'=>'required'
            ]);
        
        $crud = new Student;  
        $crud->first_name =  $request->get('first_name');  
        $crud->last_name = $request->get('last_name');  
        $crud->qualifications = $request->get('qualifications');  
        $crud->gender = $request->get('gender');  
        $crud->save();  
        return redirect('/students')->with('success', 'Student created!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);  
        return view('pages.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $this->validate($request,[
            'first_name'=>'required|alpha|max:10|min:5',
            'last_name'=>'required|alpha|max:10|min:5',
            'gender'=>'required',
            'qualifications'=>'required'
        ]);
        
        $student = Student::find($id);
        $student->first_name =  $request->get('first_name');  
        $student->last_name = $request->get('last_name');  
        $student->qualifications = $request->get('qualifications');  
        $student->gender = $request->get('gender');  
        $student->save();  
        return redirect('/students')->with('update', 'Student updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('danger', 'Student deleted!');
    }
}
