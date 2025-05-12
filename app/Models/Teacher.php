<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    public function trainingcenter() {
        return $this->belongsTo(TrainingCenter::class);
    }
}