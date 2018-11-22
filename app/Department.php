<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'num_strudents', 'class',
    ];
    public function students(){
        return $this->hasMany('App\Student');
    }

}
