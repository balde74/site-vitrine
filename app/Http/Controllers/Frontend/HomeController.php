<?php

namespace App\Http\Controllers\frontend;

use App\Models\Menu;
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
}
