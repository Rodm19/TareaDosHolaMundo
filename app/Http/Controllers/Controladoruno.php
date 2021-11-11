<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controladoruno extends Controller
{
    function funo(){
        return view('contunoview');
    }
    function fdos(){
        return view('contdosview');
    }
}
