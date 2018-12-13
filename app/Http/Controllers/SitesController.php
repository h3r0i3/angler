<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index(){
        echo "Coś tam";
    }

    public function dodaj(){
        return view('sites.dodaj'); //fukcja dodaj zwraca funkcje view która otrzyma inf. o tym, że ma wyświetlić szablon dodaj z katalogu sites.
    }
}
