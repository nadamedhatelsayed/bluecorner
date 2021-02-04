<?php

namespace App;
use App\project;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded=[];


    public function project()
    {
        return $this->hasMany('project');
    }
}
