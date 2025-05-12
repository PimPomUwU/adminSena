<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    public function courses() {
        return $this->hasMany(Course::class);
    }
    public function teachers() {
        return $this->hasMany(Teacher::class);
    }
}
