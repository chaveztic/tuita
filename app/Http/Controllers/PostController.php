<?php

namespace Tuita\Http\Controllers;

use Illuminate\Http\Request;
use Tuita\Http\Requests;
use Tuita\Http\Controllers\Controller;
use Tuita\Http\Controllers\Auth;
use Tuita\Models\Post;

class PostController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contenido = $request->input('post');
        $user = $request->user();
        $user_id = $user->id;
        $img = '';

        if($request->has('img'))
        {
            $img = $request->input('img');
        }

        $post = new Post;

        $post->contenido = $contenido;
        $post->imagen = $img;
        $post->user_id = $user_id;
        $post->save();
        

        return redirect()->route('home');
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
