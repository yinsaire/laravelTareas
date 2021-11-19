<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latarea;

class TareasController extends Controller
{

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3'
        ]);

        $tarea = new Latarea;
        $tarea->title = $request->title;
        $tarea->save();

        return redirect()->route('tareas')->with('success','Tarea creada Correctamente');
    }

    public function index(){
        $tareas = Latarea::all();
        return view('tareas.index', ['tareas' => $tareas]);
    }

    public function show($id){
        $tarea = Latarea::find($id);
        return view('tareas.show', ['tarea' => $tarea]);
    }

    public function update(Request $request, $id){
        $tarea = Latarea::find($id);
        $tarea->title = $request->title;
        $tarea->save();

        // return view('tareas.index', ['success' => 'Tarea actualizada']);
        return redirect()->route('tareas')->with('success', 'Tarea actualizada');
    }

    public function destroy($id){
        $tarea = Latarea::find($id);
        $tarea->delete();

        return redirect()->route('tareas')->with('success', 'Tarea eliminada');
    }
    
}
