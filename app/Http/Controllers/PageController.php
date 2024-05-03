<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Pow;

class PageController extends Controller
{
    public function index()
    {
        return view('screens.index');
    }
    public function curriculum()
    {
        return view('screens.curriculums');
    }
    public function about()
    {
        return view('screens.about');
    }
    public function galerie()
    {
        $photos = Photo::with('categorie')->get();
        $categories = Categorie::all();

        return view('screens.galerie', [
            'photos' => $photos,
            'categories' => $categories
        ]);
    }
    public function blog()
    {
        $posts = Post::all();
        return view('screens.blog', [
            'posts' => $posts,
        ]);
    }
    public function contact()
    {
        return view('screens.contact');
    }
    public function showBlog(Post $post)
    {
        $postFind = Post::find($post->id);

        return view('screens.lire-blog', [
            'post' => $postFind
        ]);
    }
}
