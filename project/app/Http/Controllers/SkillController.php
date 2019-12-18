<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Validator;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills=Skill::All();
        return response()->json([
            'state'=>'success',
            'description'=> $skills
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
            'name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'state' => 'error',
                'message' => $validator->errors()
            ]);
        } else {
        $skill = new Skill([
            'name' => $request->name,
        ]);
        $skill->save();
        return response()->json([
            'state' => 'success',
            'message' => 'Skill created',
        ]);
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($skill)
    {
        $skill = Skill ::find($skill);
        return response()->json([
            'state'=> 'success',
            'description'=> $skill
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
    public function update(Request $request, $skills)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',  
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->all()], 400);
        }
        else{
           
            Skill::where("id", $skills)->update([
                
                "name" => $request->name,
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
    public function destroy($skill)
    {
        $skill = Skill::find($skill);
        $skill->delete();
        return response()->json([
            "state"=>'succes',
            "message"=>'dessstrrrooooy'
        ]); 
    }
}
