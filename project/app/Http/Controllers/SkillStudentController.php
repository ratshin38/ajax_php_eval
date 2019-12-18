<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\SkillStudent;

class SkillStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skillStudent=SkillStudent::All();
        return response()->json([
            'state'=>'success',
            'description'=> $skillStudent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'student_id' => 'required|integer|max:9999',
            'skill_id' => 'required|integer|max:9999',
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
        $skillStudent = new SkillStudent([
            'student_id' => $request->student_id,
            'skill_id' => $request->skill_id,
            
        ]);
        $skillStudent->save();
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
    public function show($skillStudent)
    {
        $skillStudent = SkillStudent ::find($skillStudent);
        return response()->json([
            'state'=> 'success',
            'description'=> $skillStudent
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
    public function update(Request $request, $skillStudent)
    {
        $validator = Validator::make($request->all(), [
        'student_id' => 'required|integer|max:9999',
        'skill_id' => 'required|integer|max:9999',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->all()], 400);
        }
        else{
           
            SkillStudent::where("id", $skillStudent)->update([   
                'student_id' => $request->student_id,
                'skill_id' => $request->skill_id,
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
    public function destroy($skillStudent)
    {
        $relation = SkillStudent::find($skillStudent);
        $relation->delete();
        return response()->json([
            "state"=>'succes',
            "message"=>'dessstrrrooooy'
        ]); 
    }
}
