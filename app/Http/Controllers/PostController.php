<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{


    public function __construct()
{
    $this->middleware('auth:instructor'); // Applies to all methods in this controller
}
    public function index()
    {
        $posts = Post::where('instructor_id', auth()->id())->get(); // Récupère les articles de l'instructeur connecté
        return view('Users Frontend Theme.blog-index', compact('posts'));
    }

    public function create()
    {
        return view('Users Frontend Theme.blog-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'instructor_id' => auth()->id(), // Associe l'article à l'instructeur connecté
        ]);

        return redirect()->route('posts.index')->with('success', 'Article créé avec succès.');
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post); // Assure que l'instructeur peut éditer son propre article
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post->update($request->only('title', 'content'));

        return redirect()->route('posts.index')->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Article supprimé avec succès.');
    }

}
