<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function documents(){
        return $this->hasMany('App\Document');
    }

    public function subcategorys(){
        return $this->hasMany('App\Subcategory');
    }
}
