<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
    //
    public function index() {
        $training_centers = TrainingCenter::all();

        return view('training-center.index', compact('training_centers'));
    }

    public function create() {
        
        return view('training-center.create');
    }

    public function store(Request $request) {
        $training_centers = new TrainingCenter();

        $training_centers->name = $request->name;
        $training_centers->location = $request->location;

        $training_centers->save();

        return $training_centers;
    }
}
