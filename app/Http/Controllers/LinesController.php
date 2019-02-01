<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Line;

class LinesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = User::find(Auth::user()->id)->lines;
        return view ('lines.index')->with('lines', $lines);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view ('lines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'model' => 'required',
            'size' => 'required',
            'weight' => 'required',
        ]);            

        $line = new Line;
        $line->user_id = Auth::user()->id;
        $line->model = $request->input('model');
        $line->size = $request->input('size');
        $line->weight = $request->input('weight');
        $line->save();

        return redirect ('/zylki')->with('success', 'Żyłka: '.$request->input('model').' dodana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $line = Line::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $line->user_id){
            return redirect('/zylki')->with('error', 'Nieautoryzowany dostęp');
        }
        return view ('lines.edit')->with('line', $line);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'model' => 'required',
            'size' => 'required',
            'weight' => 'required',
        ]);            

        $line = Line::find($id);
        $line->user_id = Auth::user()->id;
        $line->model = $request->input('model');
        $line->size = $request->input('size');
        $line->weight = $request->input('weight');
        $line->save();

        return redirect ('/zylki')->with('success', 'Żyłka: '.$request->input('model').' dodana.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $line = Line::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $line->user_id){
            return redirect('/kolowrotki')->with('error', 'Nieautoryzowany dostęp');
        }
        $model = $line->model;
        $line->delete();

        return redirect ('/zylki')->with('success', 'Żyłka: '.$model.' usunięta.');
    }
}
