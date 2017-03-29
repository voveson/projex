<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Comment extends Model
{

    protected $with = ['creator'];
    protected $appends = ['parsed_content', 'created_at_string'];
    protected $fillable = ['created_by', 'task_id', 'content'];

    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }

    public function getParsedContentAttribute()
    {
        $parser = new Parsedown();

        return $parser->text($this->content);
    }

    public function getCreatedAtStringAttribute()
    {
        return $this->created_at->diffForHumans();
    }


}
