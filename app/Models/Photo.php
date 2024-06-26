<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'chemin',
        'contenu_id'
    ];
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
