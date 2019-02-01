<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Leader;

class LeadersController extends Controller
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
        $leaders = User::find(Auth::user()->id)->leaders;
        return view ('leaders.index')->with('leaders', $leaders);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view ('leaders.create');
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

        $leaders = new Leader;
        $leaders->user_id = Auth::user()->id;
        $leaders->model = $request->input('model');
        $leaders->size = $request->input('size');
        $leaders->weight = $request->input('weight');
        $leaders->save();

        return redirect ('/przypony')->with('success', 'Przypon: '.$request->input('model').' dodany.');
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
        $leader = Leader::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $leader->user_id){
            return redirect('/przypony')->with('error', 'Nieautoryzowany dostęp');
        }
        return view ('leaders.edit')->with('leader', $leader);
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

        $leader = Leader::find($id);
        $leader->user_id = Auth::user()->id;
        $leader->model = $request->input('model');
        $leader->size = $request->input('size');
        $leader->weight = $request->input('weight');
        $leader->save();

        return redirect ('/przypony')->with('success', 'Przypon: '.$request->input('model').' zapisany.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leader = Leader::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $leader->user_id){
            return redirect('/przypony')->with('error', 'Nieautoryzowany dostęp');
        }
        $model = $leader->model;
        $leader->delete();

        return redirect ('/przypony')->with('success', 'Przypon: '.$model.' usunięty.');
    }
}
