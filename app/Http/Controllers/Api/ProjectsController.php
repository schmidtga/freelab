<?php 

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;

class ProjectsController extends Controller
{
    public function index()
    {
        return ProjectResource::collection(Project::paginate(10));
    }

    public function show(Project $project)
    {
        return new ProjectResource($project);
    }
}