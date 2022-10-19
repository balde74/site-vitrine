<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Commentaire;
use App\Models\Direction;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('backend/article/index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/article/create');
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
            'titre'=>'required|string|min:3',
            'introduction'=>'required|min:5',
            'image'=>'required|mimes:jpg,png'
        ]);

        $article = new Article;
        $article->titre = $request->titre;
        $article->introduction = $request->introduction;

        if ($request->direction_id) {
            $article->direction_id = $request->direction_id;
        }
        $article->save();
        
        if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($article->image)) {
                unlink('documents/'.$article->image);
            }
            $article->image = $request->image->storeAs('articles',$hash.''.$article->id);
            $article->save();
        }

        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        // $commentaires = Commentaire::where(['article_id'=>$article->id])->orderBy('id','asc')->paginate(10);
        return view('backend/article/show',compact('article'));
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function section($article)
    {
        $article = Article::find($article);
        
        return view('backend/article/section',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('backend/article/edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titre'=>'required|string|min:3',
            'introduction'=>'required|min:5',
            'image'=>'sometimes|mimes:jpg,png'
        ]);

        $article->titre = $request->titre;
        $article->introduction = $request->introduction;

        
        $article->save();

       if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($article->image)) {
                unlink('documents/'.$article->image);
            }
            $article->image = $request->image->storeAs('articles',$hash.''.$article->id);
            $article->save();
        }

        return redirect()->route('article.show',$article->id);
    }

     public function status( $id)
    {
        $article = Article::find($id);
        
        if($article->status == 1)
        {
            $article->status = 0;
            $article->save();
        }
        elseif($article->status == 0)
        {
            $article->status = 1;
            $article->save();
        }

        return back();
    }

     public function ajoutCommentaireFrontEnd(Request $request)
    {
       $commentaire = new Commentaire;
        if ($request->isXmlHttpRequest()) {
        //recuperation des donnees
        $commentaire->nom = $request->nom;
        $commentaire->email = $request->email;
        $commentaire->commentaire = $request->commentaire;
        $commentaire->article_id = $request->article_id;

        $commentaire->save();



        return response()->Json(array(
            'nom'=> $commentaire->nom,
            'email'=>$commentaire->email,
            'commentaire' => $commentaire->commentaire,
            'date' => $commentaire->created_at->format('d/m/Y'),
            'heure' => $commentaire->created_at->format('H:i:s'),
        ));


        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        unlink('documents/'.$article->image);
        $article->delete();
        return redirect()->route('article.index');

    }
}
