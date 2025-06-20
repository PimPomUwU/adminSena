<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{


    protected $fillable = ['name','urlPdf']; //Campos que se van a asignacion masiva:
    //
    public function courses() {
        return $this->hasMany(Course::class);
    }
    public function teachers() {
        return $this->hasMany(Teacher::class);
    }
 
    
    public function scopeIncluded(Builder $query) {
        return request('included');
        $relations = explode(',', request('included'));
    }
}
