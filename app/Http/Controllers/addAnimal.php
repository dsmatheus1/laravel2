<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal; 

class Registro extends Controller
{
    function registro(){
        return view("adAnimal");

    }

    function addAnimal(Request $request){
         //   dd($request->all());

            $usuario = new Animal();
            $usuario->create($request->all());

            return view('addAnimal');
    }

}
