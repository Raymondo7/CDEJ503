<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("admin.posts", [
            'posts' => $posts,
            'formatDate' => function ($date) {
                return date('d M');
            }
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.nouveau-post");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        $post = new Post();

        $post->titre = $request->titre;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $nomPhoto = time() . '.' . $image->extension();
            $stockerChemin = $image->storeAs('images/post', $nomPhoto, 'public');
            $post->photo = $stockerChemin;
        }
        $post->contenu = $request->contenu;
        $post->save();

        return redirect()->route('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.voir-post', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        $post = Post::find($post->id);

        return view('admin.editer-post', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        $post = Post::find($post->id);

        $post->titre = $request->titre;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $nomPhoto = time() . '.' . $image->extension();
            $stockerChemin = $image->storeAs('images/post', $nomPhoto, 'public');
            $post->photo = $stockerChemin;
        }
        $post->contenu = $request->contenu;
        $post->update();

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $postFind = Post::find($post->id);
        if ($postFind) {
            $fait = $postFind->delete();
            if ($fait) {
                Storage::disk('public')->delete($post->photo);
                return redirect()->route('posts')->with('success', 'Le post a été supprimé avec success');
            }
        } else {
            return redirect()->route('posts')->with('error', 'Erreur lors de la suppression');
        }
    }
}
