<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $article = new Comment([
            'content'=>$request->get('content'),
            'article_id'=>$request->get('article_id'),
            'user_id'=>$request->get('user_id'),
            ]);
        $article->save();
        return redirect('/articles')->with('edukas', 'Artikkel salvestatud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required'
        ]);

        
        $article = new Comment([
            'content'=>$request->get('content'),
            'article_id'=>$request->get('article_id'),
            'user_id'=>1,
            ]);
        $article->save();
        return redirect('/articles')->with('edukas', 'Artikkel salvestatud');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->is_admin===1){
            $comment = Comment::find($id);
            $comment->delete();

            return redirect('/articles')->with('edukas', 'Kommentaar kustutatud!');
        }
        
    }
}
