<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    protected $table = 'tasklists';
    protected $fillable = ['project_id', 'name'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
