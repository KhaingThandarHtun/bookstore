<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\ArticleRequest;
use App\Models\ActivityLog;
class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest('id')->paginate(10);
        $page = "articles";
        $data = [
            'articles' => $articles,
            'page' => $page
        ];
        return view('aricles.index',$data);
    }

    public function create()
    {
        $page = "articles";
        $data = [
            'page' => $page,
        ];
        return view('aricles.create',$data);
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        Session::put('success','New article is saved!');
        $activity=new ActivityLog();
        $activity->table="article";
        $activity->description="new article added";
        $activity->save();
        return redirect()->route('articles.index');   
    }

    public function show(Article $article)
    {
        $data = [
            'page' => "articles",
            'article' => $article
        ];
        return view('aricles.show',$data);
    }

    public function edit(Article $article)
    {
        $data = [
            'page' => 'articles',
            'article' => $article
        ];
        return view('aricles.edit',$data);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        Session::put('success','Article data is updated !');
        $activity=new ActivityLog();
        $activity->table="article";
        $activity->description="new article updated";
        $activity->save();
        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        Session::put('success','Article data is deleted!');
        $activity=new ActivityLog();
        $activity->table="article";
        $activity->description="new article deleted";
        $activity->save();
        return redirect()->route('articles.index');
    }
}
