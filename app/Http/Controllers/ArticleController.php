<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles= Article::latest()->paginate(10);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $newImageName = $request->title . time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images\articles'), $newImageName);
        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'photo' => $newImageName,
            'user_id'=>Auth::id()
        ]);
        return Redirect::route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('update', $article);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('update', $article);
        if($article){
            $imageName = $article->photo;
            if($request->has('photo')){
                $imageName = $request->title . time() . '.' . $request->photo->extension();
                $request->photo->move(public_path('images\articles'), $imageName);
            }
            $article->update([
                'title' => $request->title,
                'description' => $request->description,
                'body' => $request->body,
                'photo' => $imageName,
            ]);
        }
        return Redirect::route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('delete', $article);
        Article::destroy($id);
        return Redirect::route('articles.index');
    }

    public function searchByTitle()
    {
        $term = request('term');
        $articles = Article::where('title', 'like', '%'. $term .'%')->latest()->paginate(10);
        return view('articles.index', compact(['articles', 'term']));
    }
}
