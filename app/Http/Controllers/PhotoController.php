<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorieRequest;
use App\Models\Photo;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::with('categorie')->get();
        $categories = Categorie::all();

        return view('admin.photos', [
            'photos' => $photos,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('admin.uploadImages', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoRequest $request)
    {

        // Traitement des fichiers téléchargés
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                // Générer un nom de fichier unique
                $nomFichier = time() . '_' . $photo->getClientOriginalName();
                // Stocker le fichier dans le dossier public
                $cheminFichier = $photo->storeAs('images/galerie', $nomFichier, 'public');

                // Enregistrer les informations dans la base de données
                $photoNew = new Photo();
                $photoNew->categorie_id = $request->categorie;
                $photoNew->nom = $photo->getClientOriginalName();
                $photoNew->chemin = $cheminFichier;
                $photoNew->save();
            }
            return redirect()->route('televerser')->with('success', 'Photos téléchargées avec succès.');
        } else {
            return redirect()->route('televerser')->with('error', 'Erreur de téléchargement des Photos.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photoFind = Photo::find($photo->id);
        if ($photoFind) {
            $fait = $photoFind->delete();
            if ($fait) {
                Storage::disk('public')->delete($photo->chemin);
                return redirect()->route('nosPhotos')->with('success', 'La photo a été supprimée avec success');
            }
        } else {
            return redirect()->route('nosPhotos')->with('error', 'Erreur lors de la suppression');
        }
    }
}
