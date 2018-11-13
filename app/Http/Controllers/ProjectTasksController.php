<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        //request()->has('completed') ? $task->complete() : $task->incomplete();

        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        return back();
    }

    public function store(Project $project)
    {
         $attributes = request()->validate(['description' => 'required']);

         $project->addTask($attributes);

        //$project->addTask(request('description'));

        return back();
    }
}
