<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Apprentice extends Model
{
    //
    protected $fillable = ['name', 'email', 'cellnumber', 'course_id', 'computer_id'];

    protected $allowIncluded = ['course', 'computer'];
    protected $allowFilter = ['id', 'courde_id', 'computer_id'];
    protected $allowSort = ['id', 'name', 'course_id', 'computer_id'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function computer() {
        return $this->belongsTo(Computer::class);
    }

    public function scopeIncluded(Builder $query) {
        if (empty($this->allowIncluded) || empty(request("included"))) {
            return;
        }

        $relations = explode(',',request('included'));

        $allowIncluded = collect($this->allowIncluded);

        foreach ($relations as $key => $relationship) {
            
            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }

        $query->with($relations);
    }

    public function scopeFilter(Builder $query) {
        if (empty($this->allowFilter) || empty(request("filter"))) {
            return;
        }

        $filters = request('filter');

        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value) {
            
            if ($allowFilter->contains($filter)) {
                $query->WHERE($filter, 'LIKE', '%'.$value.'%');
            }
        }

    }

    public function scopeSort(Builder $query) {

        if (empty($this->allowSort) || empty(request("sort"))) {
            return;
        }

        $sortFields = explode(',', request('sort'));
        $allowSort = collect($this->allowSort);

        foreach ($sortFields as $sortField) {
            
            $direction = 'asc';

            if (substr($sortField, 0, 1) === "-") {
                $direction = 'desc';
                $sortField = substr($sortField, 1);
            }

            //return $sortField;

            if ($allowSort->contains($sortField)) {
                $query->orderBy($sortField, $direction);
            }
        }


    }

    public function scopeGetOrPaginate(Builder $query) {
        
        if (request('perPage')) {
            $perPage = intval(request('perPage'));

            if ($perPage) {
                return $query->paginate($perPage);
            }
        } 

        return $query->get();
    }
}
