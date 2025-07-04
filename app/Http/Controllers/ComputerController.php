<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
class ComputerController extends Controller
{
    //
    public function index() {

        //return 'hola';
        //Manera clasica
        //$computers = Computer::all();

        //return view('computer.index', compact('computers'));


        //$computers = Computer::all();
        $computers = Computer::with(['apprentice'])->get();
        return response()->json($computers);

    }

    public function create() {
        return view('computer.create');
    }
    
    public function store(Request $request) {

        //Manera clasica
        //$computer = new Computer();

        //$computer->number = $request->number;
        //$computer->brand = $request->brand;

        //$computer->save();

        //return redirect()->route('computer.index');


        //Asignacion masiva

        
        $computer = Computer::create($request->all());

        return response()->json($computer);

    }

    public function show($id)
    {

        //return view('computer.show', compact('computer'));

        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact( 'computer'));
    }

    public function update(Request $request, Computer $computer)
    {


        $computer->number = $request->number;
        $computer->brand = $request->brand;

        $computer->save();

        return redirect()->route('computer.index');
    }

    public function destroy(Computer $computer)
    {

        $computer->delete();

        return redirect()->route('computer.index');
    }

}
