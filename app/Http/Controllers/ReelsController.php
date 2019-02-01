<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Reel;

class ReelsController extends Controller
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
        $reels = User::find(Auth::user()->id)->reels;
        return view ('reels.index')->with('reels', $reels);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view ('reels.create');
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
        ]);            

        $reel = new Reel;
        $reel->user_id = Auth::user()->id;
        $reel->model = $request->input('model');
        $reel->save();

        return redirect ('/kolowrotki')->with('success', 'Kołowrotek: '.$request->input('model').' dodana.');
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
        $reel = Reel::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $reel->user_id){
            return redirect('/kolowrotki')->with('error', 'Nieautoryzowany dostęp');
        }
        return view ('reels.edit')->with('reel', $reel);
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
        ]);            

        $reel = Reel::find($id);
        $reel->user_id = Auth::user()->id;
        $reel->model = $request->input('model');
        $reel->save();

        return redirect ('/kolowrotki')->with('success', 'Kołowrotek: '.$request->input('model').' zmodyfikowana.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reel = Reel::find($id);
        //Sprawdzenie nieautoryzowanego dostępu
        if(auth()->user()->id !== $reel->user_id){
            return redirect('/kolowrotki')->with('error', 'Nieautoryzowany dostęp');
        }
        $model = $reel->model;
        $reel->delete();

        return redirect ('/kolowrotki')->with('success', 'Kołowrotek: '.$model.' usunięta.');
    }
}
