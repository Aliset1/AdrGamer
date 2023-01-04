<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function __construct()
    {
        
    }
    public function list()
    {
        return Team::all();
    }
    public function store(Request $request)
    {

        $response = Team::create($request->all());
        if($response){
            return response()->json([
                'success' => true,
                'message' => 'Team created successfully',
                'data' => $response
            ], 201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Team not created',
                'data' => ''
            ], 400);
        }
    }
    public function show($id)
    {
        return Team::find($id);
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        if(!$team){
            return response()->json([
                'success' => false,
                'message' => 'Team not found'
            ], 404);
        }

        $team->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Team updated successfully',
            'data' => $team
        ], 200);
    }

    public function delete(Request $request, $id)
    {
        $team = Team::find($id);
        if(!$team){
            return response()->json([
                'success' => false,
                'message' => 'Team not found'
            ], 404);
        }
        $response = $team->delete();

        if($response==1){
            return response()->json([
                'success' => true,
                'message' => 'Team deleated successfully',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Team not Deleated'
            ], 400);
        }
    }
}
