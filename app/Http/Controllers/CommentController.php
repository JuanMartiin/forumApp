<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\CommentCreateRequest;
use App\Http\Requests\CommentEditRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('id')){
            $comments = Comment::all();
            return view('post');
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
             return view('comment.create');
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
    public function store(CommentCreateRequest $request)
    {
        try{
            $comment = new Comment($request->all());
            $iduser = $request->session()->get('id');
            $comment->idusuario = $iduser;
            $comment->save();
            return redirect('post');
        }catch(\Exception $e){
            return back()->withInput()->withErrors();
            ['default' => 'Error en algún dato, escribalo correctamente'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        if(session()->has('id')){
            return view('comment.edit', ['comment' => $comment]);
        }else{
            session()->flash('error', 'Debes loguearte primero!');
            return redirect('.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentEditRequest $request, Comment $comment)
    {
        try{
            $comment->update($request->all());
            return redirect('post');
        }catch( \Exception $e){
            return back()->withInput()->withErrors();
            ['default' => 'Mensaje genérico'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        try{
            $comment->delete();
            return redirect('post');
        }catch(\Exception $e){
            return back()->withErrors();
            ['default' => 'Compruebe algun dato'];
        }
    }
    
    public function takeIdpost(Request $request){
        $idpost = $request->idpost;
        return view('comment.create', ['idpost'=>$idpost]);
    }
}
