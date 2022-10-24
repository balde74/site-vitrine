<?php

namespace App\Http\Controllers;

use App\Models\Slogan;
use Illuminate\Http\Request;

class SloganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slogans = Slogan::all();
        return view('backend/slogan/index',compact('slogans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/slogan/create');
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
            'texte'=>'required|string',
            'icone'=>'required|string'
        ]);

        $slogan = new Slogan;
        $slogan->texte = $request->texte;
        $slogan->icone = $request->icone;

        $slogan->save();

        return redirect()->route('slogan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function show(Slogan $slogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function edit(Slogan $slogan)
    {
        return view('backend/slogan/edit',compact('slogan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slogan $slogan)
    {
        $request->validate([
            'texte'=>'required|string',
            'icone'=>'required|string'
        ]);
        $slogan->texte = $request->texte;
        $slogan->icone = $request->icone;

        $slogan->save();
        return redirect()->route('slogan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slogan $slogan)
    {
        // unlink('documents/'.$slogan->image);
        $slogan->delete();
        return redirect()->route('slogan.index');
    }
}
