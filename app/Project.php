<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'slug', 'status'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function taskLists()
    {
        return $this->hasMany('App\TaskList');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    public function timeEntries()
    {
        return $this->hasMany('App\TimeEntry');
    }
}
