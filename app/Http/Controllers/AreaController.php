<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    //
    public function index() {
        //API
        //$areas=Area::included()->get();
        // $areas=Area::included()->filter()->get();
        //return response()->json($areas);


        //CRUD de toda la vida
        $areas = Area::all();

        return view('area.index', compact('areas'));

        // $areas = Area::included()->findOrFail(2);

    }

    public function create() {
        return view('area.create');
    }

    public function store(Request $request){

        $areas = new Area();

        $areas->name=$request->name;
        $file=$request->file("urlPdf");
        $nombreArchivo = "pdf_".time().".".$file->guessExtension();
       //guardado del archivo
       $request->file('urlPdf')->storeAs('images'.$nombreArchivo, 'public');
        $areas->urlPdf = $nombreArchivo;

        $areas->save();
        
        return redirect()->route('area.index');

    }

        public function show(Area $area)
    {

        return view('area.show', compact('area'));
    }
    public function edit(Area $area)
    {
        return view('area.edit', compact( 'area'));
    }

    public function update(Request $request, Area $area)
    {


        $area->name = $request->name;

        $area->save();

        return redirect()->route('area.index');
    }

    public function destroy(Area $area)
    {

        $area->delete();

        return redirect()->route('area.index');
    }

}
