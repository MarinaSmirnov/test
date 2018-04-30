<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';


    public function company()
    {
        return $this->belongsTo('App\Company','company_id','id');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task','project_id','id');
    }


}
