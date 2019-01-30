<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //Submit Posts to View 
    public function index()
    {
    	return response()->json(Post::all());
    }

    public function get(Request $request)
    {
        $posts = Post::with('user')->get();
        return response()->json($posts);
    }

    public function show($id)
    {
     	$post = Post::findOrFail($id);
     	return response()->json($post);
    }
    public function store(Request $request)
    {
    	$post = Post::create($request->all());
    	return response()->json($post);
    }
    public function update(Request $request, $id)
    {
    	$post = Post::findOrFail($id);
    	$post->fill($request->all());
    	$post->save();
    	return response()->json($post);
    }
    public function delete($id)
    {
    	$post = Post::findOrFail($id);
    	$post->delete();
    	return response()->json(['message'=>'Removido com sucesso!']);
    }
}
