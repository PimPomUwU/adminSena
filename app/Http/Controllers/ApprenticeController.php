<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
    //
    public function index() {
        $apprentices = Apprentice::all();

        return view('apprentice.index', compact('apprentices'));
    }

    public function create() {
        return view('apprentice.create');
    }

    public function store(Request $request) {
        $apprentice = new Apprentice();
    
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->course_id = $request->course_id;
        $apprentice->computer_id = $request->computer_id;
        
        $apprentice->save();

        return $apprentice;

    }
}
