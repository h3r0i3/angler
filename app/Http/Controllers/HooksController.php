<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Hook;

class HooksController extends Controller
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
        $hooks = User::find(Auth::user()->id)->hooks;
        return view ('hooks.index')->with('hooks', $hooks);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view ('hooks.create');
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

        $hooks = new Hook;
        $hooks->user_id = Auth::user()->id;
        $hooks->model = $request->input('model');
        $hooks->size = $request->input('size');
        $hooks->weight = $request->input('weight');
        $hooks->save();

        return redirect ('/haczyki')->with('success', 'Haczyk: '.$request->input('model').' dodany.');
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
        $hook = Hook::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $hook->user_id){
            return redirect('/haczyki')->with('error', 'Nieautoryzowany dostęp');
        }
        return view ('hooks.edit')->with('hook', $hook);
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

        $hook = Hook::find($id);
        $hook->user_id = Auth::user()->id;
        $hook->model = $request->input('model');
        $hook->size = $request->input('size');
        $hook->weight = $request->input('weight');
        $hook->save();

        return redirect ('/haczyki')->with('success', 'Haczyk: '.$request->input('model').' zapisany.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hook = Hook::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $hook->user_id){
            return redirect('/haczyki')->with('error', 'Nieautoryzowany dostęp');
        }
        $model = $hook->model;
        $hook->delete();

        return redirect ('/haczyki')->with('success', 'Haczyk: '.$model.' usunięty.');
    }
}
