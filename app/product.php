<?php

namespace App;

use App\images;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo('App\category','cat_id');

    }
    public  function image()
    {
        return$this->hasMany('image');
    }
}
