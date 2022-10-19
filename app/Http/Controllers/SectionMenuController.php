<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\SectionMenu;
use Illuminate\Http\Request;

class SectionMenuController extends Controller
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


    public function Nouvelle_section($menu)
    {
        $menu = Menu::find($menu);
        return view('backend/section_menu/create',compact('menu'));
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
            'menu_id'=>'required|integer',
            'image'=>'sometimes|mimes:jpg,png'
        ]);
        $section = new SectionMenu;
        $section->section = $request->contenu;    
        $section->numero_section = $request->numero_section;
        $section->menu_id = $request->menu_id;

        $section->save();

        if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($section->image)) {
                unlink('documents/'.$section->image);
            }
            $section->section_image = $request->image->storeAs('section_menus',$hash.''.$section->id);
            $section->save();
        }
        return redirect()->route('section-menu',$request->menu_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionMenu  $sectionMenu
     * @return \Illuminate\Http\Response
     */
    public function show(SectionMenu $sectionMenu)
    {
        return view('backend.section_menu.show',compact('sectionMenu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionMenu  $sectionMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionMenu $sectionMenu)
    {
        $menu = Menu::find($sectionMenu->menu_id);
        return view('backend.section_menu.edit',compact('sectionMenu','menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionMenu  $sectionMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionMenu $sectionMenu)
    {
        $request->validate([
            'contenu'=>'required|min:10',
            'numero_section'=>'sometimes|integer',
            'image'=>'sometimes|mimes:jpg,png'
        ]);

        $section = $sectionMenu;
        $section->section = $request->contenu;
        if ($request->numero_section) {
                // code...
                $section->numero_section = $request->numero_section;
            }    
        $section->menu_id = $request->menu_id;

        $section->save();

        if ($request->image) {
            $hash=md5(mt_rand());
            if (!empty($section->image)) {
                unlink('documents/'.$section->image);
            }
            $section->section_image = $request->image->storeAs('section_menus',$hash.''.$section->id);
            $section->save();
        }
        return redirect()->route('section-menu',$request->menu_id);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionMenu  $sectionMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionMenu $sectionMenu)
    {
        unlink('documents/'.$sectionMenu->section_image);
        $sectionMenu->delete();
        return back();
    }
}
