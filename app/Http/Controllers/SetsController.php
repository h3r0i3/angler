<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Set;

class SetsController extends Controller
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
        $sets = User::find(Auth::user()->id)->sets;
        return view ('sets.index')->with('sets', $sets);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $fishing_rods = User::find(Auth::user()->id)->fishingRods;
        $fishing_rods_list = array();
        foreach ($fishing_rods as $fishing_rod) {
            $fishing_rods_list[$fishing_rod->id] = $fishing_rod->model;
        }  

        $hooks = User::find(Auth::user()->id)->hooks;
        $hooks_list = array();
        foreach ($hooks as $hook) {
            $hooks_list[$hook->id] = $hook->model;
        }  

        $leders = User::find(Auth::user()->id)->leaders;
        $leders_list = array();
        $leders_list[0] = "-";
        foreach ($leders as $leder) {
            $leders_list[$leder->id] = $leder->model;
        }  

        $lines = User::find(Auth::user()->id)->lines;
        $lines_list = array();
        foreach ($lines as $line) {
            $lines_list[$line->id] = $line->model;
        } 

        $reels = User::find(Auth::user()->id)->reels;
        $reels_list = array();
        $reels_list[0] = "-";
        foreach ($reels as $reel) {
            $reels_list[$reel->id] = $reel->model;
        } 

        return view ('sets.create')->with('fishing_rods', $fishing_rods_list)
                                    ->with('hooks', $hooks_list)
                                    ->with('leaders', $leders_list)
                                    ->with('lines', $lines_list)
                                    ->with('reels', $reels_list);
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
            'name' => 'required',
            'line' => 'required',
            'fishing_rod' => 'required',
            'hook' => 'required',
        ]);            

        $sets = new Set;
        $sets->user_id = Auth::user()->id;
        $sets->name = $request->input('name');
        $sets->line_id = $request->input('line');
        $sets->fishing_rod_id = $request->input('fishing_rod');
        $sets->hook_id = $request->input('hook');
        $sets->leader_id = ($request->input('leader')!=0?$request->input('leader'):NULL);
        $sets->reel_id = ($request->input('reel')!=0?$request->input('reel'):NULL);
        $sets->save();

        return redirect ('/zestawy')->with('success', 'Zestaw: '.$request->input('name').' dodany.');
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
        $set = Set::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $set->user_id){
            return redirect('/zestawy')->with('error', 'Nieautoryzowany dostęp');
        }

        $fishing_rods = User::find(Auth::user()->id)->fishingRods;
        $fishing_rods_list = array();
        foreach ($fishing_rods as $fishing_rod) {
            $fishing_rods_list[$fishing_rod->id] = $fishing_rod->model;
        }  

        $hooks = User::find(Auth::user()->id)->hooks;
        $hooks_list = array();
        foreach ($hooks as $hook) {
            $hooks_list[$hook->id] = $hook->model;
        }  

        $leders = User::find(Auth::user()->id)->leaders;
        $leders_list = array();
        $leders_list[0] = "-";
        foreach ($leders as $leder) {
            $leders_list[$leder->id] = $leder->model;
        }  

        $lines = User::find(Auth::user()->id)->lines;
        $lines_list = array();
        foreach ($lines as $line) {
            $lines_list[$line->id] = $line->model;
        } 

        $reels = User::find(Auth::user()->id)->reels;
        $reels_list = array();
        $reels_list[0] = "-";
        foreach ($reels as $reel) {
            $reels_list[$reel->id] = $reel->model;
        } 

        return view ('sets.create')->with('fishing_rods', $fishing_rods_list)
                                    ->with('hooks', $hooks_list)
                                    ->with('leaders', $leders_list)
                                    ->with('lines', $lines_list)
                                    ->with('reels', $reels_list);
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
            'name' => 'required',
            'line' => 'required',
            'fishing_rod' => 'required',
            'hook' => 'required',
        ]);            

        $set = Set::find($id);
        $sets->user_id = Auth::user()->id;
        $sets->name = $request->input('name');
        $sets->line = $request->input('line');
        $sets->fishing_rod = $request->input('fishing_rod');
        $sets->hook = $request->input('hook');
        $sets->leader = $this->getIfSet($request->input('leader'));
        $sets->reel = $this->getIfSet($request->input('reel'));
        $sets->save();

        return redirect ('/zestawy')->with('success', 'Zestaw '.$request->input('model').' zmodyfikowany.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $set = Set::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $set->user_id){
            return redirect('/zestawy')->with('error', 'Nieautoryzowany dostęp');
        }
        $model = $set->model;
        $set->delete();

        return redirect ('/zestawy')->with('success', 'Zestaw: '.$model.' usunięty.');
    }   
}
