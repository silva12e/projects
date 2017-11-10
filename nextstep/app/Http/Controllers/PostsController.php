<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostType;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
        $categories = PostType::all();
        return response()->json([ 'posts' => $posts,'categories' => $categories]);
    }

    //Handle some data validation here 
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;

        //Actually this should be a reference to the category id?
        $post->category = $request->category;
        $post->author = $request->author;

        $post->save();
    }

    //Handle some data validation here 
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->author = $request->author;
        $post->category = $request->category;
        $post->save();
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if($post)
            $post->delete();
        return response()->json('Post has been deleted from server');
    }
    public function getPost($id)
    {
        $post = Post::find($id);
        return response()->json(['post'=>$post]);
    }

    public function getCategories()
    {
        $categories = PostType::all();
        return response()->json(['categories'=>$categories]);
    }
    
    public function createCategory(Request $request)
    {
        $category = new PostType;
        $category->category = $request->category;
        $category->save();
    }

    public function destroyCategory($id)
    {
        $category = PostType::find($id);
        if($category)
            $category->delete();

    }
}
