<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $project->addTask(request() - $this->validate(['description' => 'required']));

        return back();
    }

    public function update(Task $task)
    {
        if (\request()->has('completed')) {
            $task->complete();
        } else {
            $task->incomplete();
        }

        return back();
    }
}
