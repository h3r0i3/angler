<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function dodaj(){
        return view('sites.dodaj'); //fukcja dodaj zwraca funkcje view która otrzyma inf. o tym, że ma wyświetlić szablon dodaj z katalogu sites.
    }

    public function ranking(){
        return view('sites.ranking');
    }

    public function atlas(){
        return view('sites.atlas');
    }

    public function ochrona(){
        return view('sites.ochrona');
    }

    public function lowiska(){
        return view('sites.lowiska');
    }

}
