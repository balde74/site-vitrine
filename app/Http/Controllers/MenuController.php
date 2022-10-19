<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Type_menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('backend/menu/index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_menus = Type_menu::all();
        return view('backend.menu.create',compact('type_menus'));
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
            'description'=>'required|min:5',
            'type_menu_id'=>'required|integer',
            'image'=>'required|mimes:jpg,png'
        ]);
        // dd($request->all());

        $menu = new Menu;
        $menu->titre = $request->titre;
        $menu->description = $request->description;
        $menu->type_menu_id = $request->type_menu_id;

        $menu->save();
        
        if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($menu->image)) {
                unlink('documents/'.$menu->image);
            }
            $menu->image = $request->image->storeAs('menus',$hash.''.$menu->id);
            $menu->save();
        }
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('backend.menu.show',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $type_menus = Type_menu::all();
        return view('backend.menu.edit',compact('menu','type_menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'titre'=>'required|string|min:3',
            'description'=>'required|min:5',
            'type_menu_id'=>'required|integer',
            'image'=>'sometimes|mimes:jpg,png'
        ]);

        $menu->titre = $request->titre;
        $menu->description = $request->description;
        $menu->type_menu_id = $request->type_menu_id;

        $menu->save();
        
        if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($menu->image)) {
                unlink('documents/'.$menu->image);
            }
            $menu->image = $request->image->storeAs('menus',$hash.''.$menu->id);
            $menu->save();
        }
        return redirect()->route('menu.index');   
    }

    public function section($menu)
    {
        $menu = Menu::find($menu);
        return view('backend/menu/section',compact('menu'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        dd(
            
            'dk'
        );
        unlink('documents/'.$menu->image);
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
