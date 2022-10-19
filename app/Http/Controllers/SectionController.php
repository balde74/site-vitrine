<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Nouvelle_section($article)
    {
        $article = Article::find($article);
        return view('backend/section_article/create',compact('article'));
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
            'contenu'=>'required|min:10',
            'numero_section'=>'required|integer',
            'article_id'=>'required|integer',
            'image'=>'sometimes|mimes:jpg,png'
        ]);

        $section = new Section;
        $section->section = $request->contenu;    
        $section->numero_section = $request->numero_section;
        $section->article_id = $request->article_id;

        $section->save();

        if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($section->image)) {
                unlink('documents/'.$section->image);
            }
            $section->section_image = $request->image->storeAs('sections',$hash.''.$section->id);
            $section->save();
        }
        return redirect()->route('section',$request->article_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        return view('backend/section_article/show',compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {   
        $article = Article::find($section->article_id);
        return view('backend/section_article/edit',compact('section','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
         $request->validate([
            'contenu'=>'required|min:10',
            'numero_section'=>'sometimes|integer',
            'image'=>'sometimes|mimes:jpg,png'
        ]);
         // dd('dk');
        $section->section = $request->contenu;
        if ($request->numero_section) {
                // code...
                $section->numero_section = $request->numero_section;
            }    
        $section->article_id = $request->article_id;

        $section->save();

        if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($section->image)) {
                unlink('documents/'.$section->image);
            }
            $section->section_image = $request->image->storeAs('sections',$hash.''.$section->id);
            $section->save();
        }
        return redirect()->route('section',$request->article_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
         unlink('documents/'.$section->section_image);
        $section->delete();
        return back();
    }
}
