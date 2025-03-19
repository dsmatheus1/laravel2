<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarAnimais extends Controller
{
    function listaranimais (){
        return view("listaranimais");

    }
}
