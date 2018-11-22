<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'f_name', 'l_name', 'gender','featured','grade_maths','grade_literature','grade_biology','department_id',
    ];
    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function getFeaturedAttribute($featured){
        return asset($featured);
    }
}
