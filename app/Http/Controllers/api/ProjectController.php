<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index() {
        return response(Project::select('id','title')->get(),200);
    }

    public function store(Request $request) {
        $project = Project::create($request->only('title'));
        return response(compact('project'),201);
    }
    
    public function update($id,Request $request) {
        $project = Project::find($id);
        return [
            $project,
            $request->only('title')
        ];
        $project->update($request->only('title'));
        return response('Success',201);
    }

    public function delete($id) {
        $project = Project::find($id);
        $project->delete();
        return response('Deleted',201);
    }

}
