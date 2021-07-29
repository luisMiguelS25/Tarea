<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 

class tablaU extends Controller
{
    public function contentUsers(){
        $users = App\users::all();
        return view('TablasUsuario', compact ('users'));
    }
}