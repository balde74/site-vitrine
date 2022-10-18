<?php

namespace App\Models;

use App\Models\Type_menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    function type_menu()
    {
        return $this->belongsTo(Type_menu::class);
    }
}
