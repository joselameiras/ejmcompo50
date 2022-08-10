<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso_table;

class CursosController extends Controller
{
    //
    public function index(){

        //return "enviado desde el controlador";
        return Curso_table::all();
    }

    public function show($id, Request $request){
        $course=Curso_table::findOrFail($id);

    }

    public function store(Request $request){
        $this->validate(
            $request, ["name"=>'required',"description"=>'required',"photo"=>'required']
        );
           

    }
}
