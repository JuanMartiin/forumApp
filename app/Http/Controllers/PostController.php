<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostEditRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(session()->has('id')){
            $posts = Post::all();
            return view('post.index', ['posts' => $posts]);
        }else{
            session()->flash('error', 'Debes loguearte primero!');
            return redirect('.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session()->has('id')){
            return view('post/create');
        }else{
            session()->flash('error', 'Debes loguearte primero!');
            return redirect('.');
            
            
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        try{
            $post = new Post($request->all());
            $id = $request->session()->get('id');
            $post->idusuario = $id;
            $post->save();
            return redirect('post');
        }catch( \Exception $e){
            return back()->withInput()->withErrors();
            ['default' => 'Error en algún dato, escribalo correctamente'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(session()->has('id')){
            return view('post.edit', ['post' => $post]);
        }else{
            session()->flash('error', 'Debes loguearte primero!');
            return redirect('.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostEditRequest $request, Post $post)
    {
        try{
            $post->update($request->all());
            return redirect('post');
        }catch( \Exception $e){
            return back()->withInput()->withErrors();
            ['default' => 'Mensaje genérico'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        try{
            $post->delete();
            return redirect('post');
        }catch(\Exception $e){
            return back()->withErrors();
            ['default' => 'Compruebe algun dato'];
        }
    }
}
