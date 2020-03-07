<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CttcSubsubgroups extends Model
{
    public function cttc_subgroup(){
        return $this->belongsTo('App\CttcSubgroups');
    }
}
