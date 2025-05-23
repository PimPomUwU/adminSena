<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function apprentices() {
        return $this->hasMany(Apprentice::class);
    }

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function trainingcenter() {
        return $this->belongsTo(TrainingCenter::class);
    }  

    public function teachers() {
        return $this->belongsToMany(Teacher::class);
    }

}
