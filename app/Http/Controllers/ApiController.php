<?php namespace App\Http\Controllers;

use App\Comment;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    public function getAllTasks()
    {
        $tasks = new \stdClass();
        $tasks->backlog = Task::where('status', 'backlog')->orderBy('sort_order')->get();
        $tasks->ready = Task::where('status', 'ready')->orderBy('sort_order')->get();
        $tasks->in_progress = Task::where('status', 'in_progress')->orderBy('sort_order')->get();
        $tasks->done = Task::where('status', 'done')->orderBy('sort_order')->get();

        return response()->json([
            'tasks' => $tasks
        ], 200);
    }

    public function updateTasks()
    {
        $list = Input::get('list');
        $status = Input::get('status');

        foreach($list as $i => $item)
        {
            $task = Task::find($item['id']);
            $task->update([
                'status' => $status,
                'sort_order' => $i
            ]);
        }
    }

    public function postComment()
    {
        $user_id = Input::get('creator_id');
        $content = Input::get('comment');
        $task_id = Input::get('task_id');

        $comment = Comment::create([
            'created_by'    =>  $user_id,
            'task_id'       =>  $task_id,
            'content'       =>  $content
        ]);

        return response()->json([
            'comment'   =>  $comment
        ], 200);

    }

    public function update_assignee()
    {
        $selected = Input::get('assignees');
        $task_id = Input::get('task_id');

        $task = Task::find($task_id);
        $task->assigned_to = $selected[0];

        $task->save();

        return response()->json([
            'task'   =>  $task
        ], 200);
    }
}
