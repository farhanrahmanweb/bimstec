<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'designation', 'contact', 'about'
    ];

    public function division(){
        return $this->belongsTo('App\Division');
    }
}
