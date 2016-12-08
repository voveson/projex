<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['created_by', 'assigned_to', 'tasklist_id', 'description', 'status'];
    protected $with = ['creator', 'assignee'];

    public function tasklist()
    {
        return $this->belongsTo('App\TaskList');
    }

    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }

    public function assignee()
    {
        return $this->hasOne('App\User', 'id', 'assigned_to');
    }
}
