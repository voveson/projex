<?php namespace App\Services;


use App\Project;
use App\TaskList;
use App\Task;

class SeedingService
{
    public static function seedDB()
    {
        $project = Project::create([
            'name' => 'My Project',
            'slug' => 'my-project',
            'status' => 'active'
        ]);

        $tasklist = TaskList::create([
            'project_id' => $project->id,
            'name' => 'Phase 1'
        ]);

        for($i = 1; $i < 41; $i++)
        {
            if ($i < 10)
                $status = 'backlog';
            elseif ($i < 20)
                $status = 'ready';
            elseif ($i < 30)
                $status = 'in_progress';
            else
                $status = 'done';

            $task = Task::create([
                'created_by' => 1,
                'assigned_to' => 1,
                'tasklist_id' => $tasklist->id,
                'description' => "My task number " . $i,
                'status' => $status,
                'sort_order' => $i
            ]);
        }
    }
}