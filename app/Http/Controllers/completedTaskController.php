<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class completedTaskController extends Controller
{
    public function store(Task $task){
        $task->complete();

        return redirect('/projects'. $task->project->id);
    }

    public function destroy(Task $task){
        $task->incomplete();
        return redirect('/projects/'. $task->project->id);
    }
}
