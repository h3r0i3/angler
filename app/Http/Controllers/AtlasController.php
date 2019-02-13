<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\FishingRodType;
use App\FishingRod;
use App\User;

class AtlasController extends Controller
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
        if (Auth::check())
        {
            //$fishing_rods = User::find(Auth::user()->id)->fishingRods;
            return view ('sites.atlas')->with('fishing_rods', $fishing_rods);
        }
        else
        {
            return view ('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fishing_rods_types = FishingRodType::all();
        $types_name = array();
        foreach ($fishing_rods_types as $fishing_rod_type) {
            $types_name[$fishing_rod_type->id] = $fishing_rod_type->type;
        }
        return view ('sites.atlas')->with('fishing_rods_types', $types_name);
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
            'type' => 'required', 
            'length' => 'required',
            'model' => 'required',
        ]);            

        $fishingRod = new FishingRod;
        $fishingRod->user_id = Auth::user()->id;
        $fishingRod->model = $request->input('model');
        $fishingRod->length = $request->input('length');
        $fishingRod->type_id = $request->input('type');
        $fishingRod->save();

        return redirect ('/wedki')->with('success', 'Wędka: '.$request->input('model').' dodana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
