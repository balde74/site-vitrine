<?php

namespace App\Models;

use App\Models\Type_menu;
use App\Models\SectionMenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    function type_menu()
    {
        return $this->belongsTo(Type_menu::class);
    }

    function section_menus()
    {
        return $this->hasMany(SectionMenu::class);
    }
}
