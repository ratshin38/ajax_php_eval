<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::All();
        return response()->json([
            'state'=>'success',
            'description'=> $students
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'age' => 'required|integer|max:255',
            'phone_number' => 'required|unique:students|max:255',
            'email' => 'required|unique:students|max:255',
        ]);
        if ($validator->fails()) {
            // return redirect('post/create')
            //             ->withErrors($validator)
            //             ->withInput();
            return response()->json([
                'state' => 'error',
                'message' => $validator->errors()
            ]);
        } else {
        $student = new Student([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);
        $student->save();
        return response()->json([
            'state' => 'success',
            'message' => 'Intern created',
        ]);
        
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student ::find($student);
        return response()->json([
            'state'=> 'success',
            'description'=> $student
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Student $student)
    {
            $validator = Validator::make($request->all(), [
                'lastname' => 'required|max:255',
                'firstname' => 'required|max:255',
                'age' => 'required|integer|max:255',
                'phone_number' => 'required|unique:students|max:255',
                'email' => 'required|unique:students|max:255',
            ]);
    
            if ($validator->fails()) {
                return response()->json(["message" => $validator->errors()->all()], 400);
            }
            else{
               
                Student::where("id", $student->id)->update([
                    
                    "firstname" => $request->firstname,
                    "lastname" => $request->lastname,
                    "email" => $request->email,
                    "phone_number" => $request->phone_number,
                    "age" => $request->age,
                ]);
               
                return response()->json([
                    "state"=> 'success',
                    "message" => 'its on the box'
                    ]);   
            }     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
                $student = Student::find($student);
                $student->delete();
                return response()->json([
                    "state"=>'succes',
                    "message"=>'dessstrrrooooy'
                ]); 
    }
}
