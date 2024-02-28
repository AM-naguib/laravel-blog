<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with("category","user")->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view("posts.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|min:3|string|max:255",
            "description" => "required|min:3",
            "category_id" => "required|exists:categories,id"
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = 1;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route("posts.index")->with("success", "Post created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view("posts.edit", compact("post", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            "title" => "required|min:3|string|max:255",
            "description" => "required|min:3|string",
            "category_id" => "required|exists:categories,id"
        ]);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = 1;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route("posts.index")->with("success", "Post Edit successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("posts.index")->with("success", "Post Deleted successfully");

    }

    public function search(Request $request){
        $q = $request->q;
        $posts = Post::where('description', 'like', '%' . $q . '%')->get();
        return view("posts.search",compact("posts"));
    }
}
