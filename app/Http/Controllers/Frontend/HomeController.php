<?php

namespace App\Http\Controllers\frontend;

use App\Models\Menu;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // affichage des menu 
    public function menuShow($id)
    {
        $menu = Menu::find($id);
       return view('frontend/menu/show',compact('menu'));
    }

     // affichage des articles 
     public function actualites()
     {
         $articles = Article::where('status',1)->orderby('created_at','desc')->get();
        return view('frontend/article/list',compact('articles'));
     }

       // affichage des articles 
       public function article_show($id)
       {
            $article = Article::find($id);
            $articles = Article::where('status',1)->get();
          return view('frontend/article/show',compact('article','articles'));
       }
}
