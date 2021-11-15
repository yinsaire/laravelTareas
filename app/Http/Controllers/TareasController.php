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

        $latarea = new Latarea;
        $latarea->title = $request->title;
        $latarea->save();

        return redirect()->route('tareas')->with('success','Tarea creada');
    }

}
