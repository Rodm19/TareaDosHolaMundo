<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controladordos extends Controller
{
    function funo(){
        return view('cont2unoview');
    }
    function fdos(){
        return view('cont2dosview');
    }
}
