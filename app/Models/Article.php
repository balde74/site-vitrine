<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    

    // public function commentaires()
    // {
    //     return $this->hasMany(Commentaire::class);
    // }
}
