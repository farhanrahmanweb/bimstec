<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CttcPage extends Model
{
    public function cttc_subgroups(){
        return $this->hasMany('App\CttcSubgroups');
    }
}
