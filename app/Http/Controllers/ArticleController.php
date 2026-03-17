<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return view('index', compact('articles'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

        Article::create($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articol creat!');
    }

    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articol actualizat!');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Articol șters!');
    }
}
