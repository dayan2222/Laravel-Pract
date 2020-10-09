<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        # Render a list of a resource...
        if (request('tag')){
            $articles = Tag::where('name',request('tag'))->firstOrFail()->articles;
        }
        else{
            $articles = Article::latest()->get();
        }


        return view('articles.index',['articles'=>$articles]);
    }


    public function show(Article $article)
    {

        # Shows a single resource...
        // $article = Article::find($id);
        return view('articles.show',['article'=>$article]);
    }


    public function create()
    {
        # Shows a view to create a new resource...
        return view('articles.create',[
            'tags'=>Tag::all()
        ]);
    }

    public function store()
    {
         # Persist the new resource...        
        $article = new Article($this->validateArticle());
        $article->user_id = 1 ; // on authentication you can use $article->user_id = auth()->id()
        // or
        auth()->user()->articles()->create($article);
        
        // Article::create($this->validateArticle());

        // return redirect('/articles');
        return redirect(route('articles.index'));

    }

    public function edit(Article $article)
    {
        # Show a view to edit an existing resource...
        // $article = Article::find($id);
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article)
    {
        # Persist the edited resource...
        $article->update($this->validateArticle());

        // return redirect("/articles/". $article->id); 
        // return redirect(route('articles.show',$article)); write like this or like below
        return redirect($article->path());  # here you need to add method in model
    }

    public function destroy()
    {
        # Delete the resource...
    }

    protected function validateArticle(Type $var = null)
    {
        # code...
        return request()->validate([
            'title'=> 'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
    } // we create a function to avoid duplication 

}
