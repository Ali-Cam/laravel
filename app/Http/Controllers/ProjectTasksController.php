<?php

namespace App\Http\Controllers;
use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function update(Task $task){
        $method = request()->has('completed')? 'complete': 'incomplete';
        $task->$method();
        return back();
    }

    public function store(Project $project){

        $validated= request()->validate(['body'=>'required']);
        $project->addTask($validated);
        return back();
    }
}
