<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    //

    protected $fillable = ['number', 'brand'];
    protected $allowIncluded = ['apprentice'];


    public function apprentice() {
        return $this->hasOne(Apprentice::class);
    }
}
