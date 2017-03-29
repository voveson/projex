<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['created_by', 'assigned_to', 'tasklist_id', 'sort_order', 'description', 'status'];
    protected $with = ['creator', 'assignee', 'comments'];
    protected $appends = ['created_at_string'];

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

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function getCreatedAtStringAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
