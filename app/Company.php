<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function project(){

        return $this->hasOne('App\Project','company_id','id');

    }


}
