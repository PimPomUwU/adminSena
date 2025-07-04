<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
    //
    public function index()
    {   
        $apprentices = Apprentice::all();

        return view('apprentice.index', compact('apprentices'));
    }

    public function create()
    {
        $course_ids = Course::pluck('id'); //Lista de todos los 'id'
        $computer_ids = Computer::pluck('id');

        return view('apprentice.create', compact('course_ids', 'computer_ids'));
    }

    public function store(Request $request)
    {
        $apprentice = new Apprentice();

        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->course_id = $request->course_id;
        $apprentice->computer_id = $request->computer_id;

        $apprentice->save();

        return redirect()->route('apprentice.index');

    }

    public function show(Apprentice $apprentice)
    {
        //$apprentice = Apprentice::find($id); //Es el Apprentice $apprentice de arriba
        $course = Course::all();
        $computer = Computer::all();

        return view('apprentice.show', compact('apprentice'));
    }
    public function edit(Apprentice $apprentice)
    {
        return view('apprentice.edit', compact('apprentice'));
    }

    public function update(Request $request, Apprentice $apprentice)
    {


        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->course_id = $request->course_id;
        $apprentice->computer_id = $request->computer_id;

        $apprentice->save();

        return redirect()->route('apprentice.index');
    }

    public function destroy(Apprentice $apprentice)
    {

        $apprentice->delete();

        return redirect()->route('apprentice.index');
    }

}
