<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso_table;

class CursosController extends Controller
{
    //
    public function index(Request $request){

        //return "enviado desde el controlador";
        $curso=Curso_table::all();
        return view("lista",["cursos"=>$curso]);
    }

    public function show($id, Request $request){
        return Curso_table::findOrFail($id);

    }

    public function store(Request $request){
        $validated=$request->validate(
            $request, ["name"=>'required',"description"=>'required',"photo"=>'required|url']
        );    
        return Curso_table::create($validated);
    }

    public function update($id, Request $request){
        $curso=Curso_table::findOrFail($id);
        $validated=$request->validate(
            $request, ["name"=>'required',"description"=>'required',"photo"=>'required|url']
        );    
        return Curso_table::update($validated);
    }

     public function destroy($id){
         $curso=Curso_table::findOrFail($id);
        $curso->delete();
        return true;

    }
}
