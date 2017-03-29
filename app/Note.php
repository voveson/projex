<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
