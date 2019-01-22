<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts = Post::orderBy('waga', 'desc')->get();
        $posts = DB::select('SELECT * FROM posts ORDER BY dlugosc DESC LIMIT 5');
        return view ('sites.ranking')->with('posts', $posts);;
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('sites.dodaj');
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
            'nazwa' => 'required', 
            'dlugosc' => 'required',
            'waga' => 'required', 
            'info' => 'required',
        ]);
            
        // stworz post
        $post = new Post;
        $post->nazwa = $request->input('nazwa');
        $post->dlugosc = $request->input('dlugosc');
        $post->waga = $request->input('waga');
        $post->info = $request->input('info');
        $post->save();

        return redirect ('/')->with('success', 'Post utworzony');
        

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
