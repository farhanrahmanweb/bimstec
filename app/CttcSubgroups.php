<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CttcSubgroups extends Model
{
    public function cttc_page(){
        return $this->belongsTo('App\CttcPage');
    }

    public function cttc_subsubgroups(){
        return $this->hasMany('App\CttcSubsubgroups');
    }
}
