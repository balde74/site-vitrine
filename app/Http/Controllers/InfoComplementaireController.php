<?php

namespace App\Http\Controllers;

use App\Models\Info_complementaire;
use Illuminate\Http\Request;

class InfoComplementaireController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info_complementaire  $info_complementaire
     * @return \Illuminate\Http\Response
     */
    public function show(Info_complementaire $info_complementaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info_complementaire  $info_complementaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Info_complementaire $info_complementaire)
    {
        return view('backend/info/edit',compact('info_complementaire'));
    }

    public function mot_directeur(Info_complementaire $info_complementaire)
    {
        return view('backend.info.mot_directeur',compact('info_complementaire'));
    }

    public function image_principale(Info_complementaire $info_complementaire)
    {
        return view('backend.info.image_principale',compact('info_complementaire'));
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info_complementaire  $info_complementaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info_complementaire $info_complementaire)
    {
        if($request->email || $request->adresse || $request->telephone)
        {
            $request->validate([
                'telephone'=>'required',
                'email'=>'email|required',
                'adresse'=>'required',
            ]);
            $info_complementaire->email = $request->email;
            $info_complementaire->telephone = $request->telephone;
            $info_complementaire->adresse = $request->adresse;
            $info_complementaire->save();
        }
        if($request->mot_directeur)
        {
            $request->validate([
                'mot_directeur'=>'required|min:5',
            ]);
            $info_complementaire->mot_directeur = $request->mot_directeur;

            $info_complementaire->save();

            if ($request->image) {
                 $hash=md5(mt_rand());
                 if (!empty($info_complementaire->mot_directeur_image)) {
                     unlink('documents/'.$info_complementaire->mot_directeur_image);
                 }
                 $info_complementaire->mot_directeur_image = $request->image->storeAs('infos',$hash.''.$info_complementaire->id);
                 $info_complementaire->save();
             }
             
        }
        if($request->texte)
        {
            $request->validate([
                'texte'=>'required|min:5',
            ]);
            $info_complementaire->texte = $request->texte;

            $info_complementaire->save();

            if ($request->image) {
                 $hash=md5(mt_rand());
                 if (!empty($info_complementaire->image)) {
                     unlink('documents/'.$info_complementaire->image);
                 }
                 $info_complementaire->image = $request->image->storeAs('info_image',$hash.''.$info_complementaire->id);
                 $info_complementaire->save();
             }
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info_complementaire  $info_complementaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info_complementaire $info_complementaire)
    {
        //
    }
}
