<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function gallery(){
        return $this->belongsTo('App\Gallery');
    }
    public function event(){
        return $this->belongsTo('App\Event');
    }
}
