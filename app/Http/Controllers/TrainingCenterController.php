<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
    //
    public function index() {
        //API
        //$training_centers = TrainingCenter::included()->get();
        //$training_centers = TrainingCenter::included()->filter()->get();
        //$training_centers = TrainingCenter::included()->filter()->sort()->get();
        $training_centers = TrainingCenter::included()->filter()->sort()->GetOrPaginate();
        return response()->json($training_centers);
        
/*         $training_centers = TrainingCenter::all();

        return view('training-center.index', compact('training_centers')); */
    }

    public function create() {
        
        return view('training-center.create');
    }

    public function store(Request $request) {
        $training_center = new TrainingCenter();

        $training_center->name = $request->name;
        $training_center->location = $request->location;

        $training_center->save();

        return redirect()->route('training-center.index');
    }

    public function show(TrainingCenter $training_center)
    {

        return view('training-center.show', compact('training_center'));
    }
    public function edit(TrainingCenter $training_center)
    {
        return view('training-center.edit', compact( 'training_center'));
    }

    public function update(Request $request, TrainingCenter $training_center)
    {


        $training_center->name = $request->name;
        $training_center->location = $request->location;

        $training_center->save();

        return redirect()->route('training-center.index');
    }

    public function destroy(TrainingCenter $training_center)
    {

        $training_center->delete();

        return redirect()->route('training-center.index');
    }
}
