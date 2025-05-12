<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
class ComputerController extends Controller
{
    //
    public function index() {
        $computers = Computer::all();

        return view('computer.index', compact('computers'));
    }

    public function create() {
        return view('computer.create');
    }

    public function store(Request $request) {
        $computers = new Computer();

        $computers->number = $request->number;
        $computers->brand = $request->brand;

        $computers->save();

        return $computers;
    }
}
