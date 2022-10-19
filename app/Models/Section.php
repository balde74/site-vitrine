<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function Article()
    {
        return $this->belongsTo(Article::class);
    }
}
