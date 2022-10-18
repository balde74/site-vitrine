<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_menu extends Model
{
    use HasFactory;

    function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
