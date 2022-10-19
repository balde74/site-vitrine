<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Galerie::all();
        return view('backend.galerie.index',compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galerie.create');
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
            'image'=>'required',
            'image.*'=>'image'
        ]);
        if($request->hasfile('image'))
        {
            $images = $request->file('image');
            
            foreach($images as $image)
            {
                $galerie = new Galerie;
                $name = $image->getClientOriginalName();
                $hash=md5(mt_rand());
                // dd($image);
                // $produit->image = $request->image->storeAs('produits',$hash.''.$produit->id);
                $galerie->image = $image->storeAs('galeries',$hash);
                $galerie->save();
                // dd($name);
            }
            // dd($images);
        }
        // dd($request->all());
        return redirect()->route('galerie.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function show(Galerie $galerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerie $galerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerie $galerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galerie $galerie)
    {
          unlink('documents/'.$galerie->image);
          $galerie->delete();
          return redirect()->route('galerie.index');
    }
}
