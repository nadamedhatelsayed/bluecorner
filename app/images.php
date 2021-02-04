<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $guarded=[];

    public  function project()
    {
        return$this->belongsTo('App\project','project_id');
    }

}
