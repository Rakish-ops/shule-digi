<?php

namespace App\Http\Controllers;
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
        
        $student = new StudentController;
        return view('index', compact('student'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $storeData = $request->validate([
            'student_id'=> 'max:255',
            'student_name'=> 'required|max:255',  
            'date_of_birth'=>'required|date',
            'family_id'=> 'max:255', 
            'home_address'=> 'required|max:255',
            'medical_notes'=> 'required|max:255',
            
             ]);
          $student = StudentController::create($storeData);

        return redirect('/students')->with('completed', 'Student saved Successfully!');
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
          $student = Student::findOrFail($id);
        return view('edit', compact('student'));
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
         $updateData = $request->validate([
            'student_id'=> 'required|max:255',
            'student_name'=> 'required|max:255',  
            'date_of_birth'=>'required|date',
            'family_id'=> 'required|max:255',  
            'teacher_id'=> 'required|max:255',
            'home_address'=> 'required|max:255',
            'medical_notes'=> 'required|max:255',
            'teacher_name'=> 'required|max:255',
        ]);
          Student::whereId($id)->update($updateData);
        return redirect('/students')->with('completed', 'Student updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('completed', 'Student deleted Successfully!');
    }
}
