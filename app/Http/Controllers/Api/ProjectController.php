<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;



class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with("type","tecnologies")->paginate(2);
        $response = [
        "success" => true,
        "results" => $projects,
        "message" => "200 OK"
        ];
        return response()->json($response);
    }
}
