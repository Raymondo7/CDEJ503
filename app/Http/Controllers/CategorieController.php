<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function store(StoreCategorieRequest $request)
    {
        $categorie = new Categorie();
        $categorie->categorie = $request->categorie;
        $categorie->save();

        return redirect()->route('televerser')->with('success', 'La catégorie/l\'évenement a été créé avec succès !');
    }
}
