<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function show()
    {
        $tasks = new \stdClass();
        $tasks->backlog = Task::where('status', 'backlog')->orderBy('sort_order')->get();
        $tasks->ready = Task::where('status', 'ready')->orderBy('sort_order')->get();
        $tasks->in_progress = Task::where('status', 'in_progress')->orderBy('sort_order')->get();
        $tasks->done = Task::where('status', 'done')->orderBy('sort_order')->get();

        return view('project')->with([
            'tasks' => $tasks
        ]);
    }
}
