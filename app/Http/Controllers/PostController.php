<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extend Controller {

  public function index()
  {
    $Posts = Post:all();
    return response()->json($Posts);
  }

  public function getPost($id)
  {
    $Post = Post::find($id);
    return response()->json($Post);
  }

  public function createPost(Request $request)
  {
    $Post = Post::create($request->all());
    return response()->json($Post);
  }

  public function deletePost($id)
  {
    $Post = Post::find($id);
    $Post->delete();
    return response()->json('deleted');
  }

  public function updatePost(Request $request, $id)
  {
    $Post = Post::find($id)
    $Post->name = $request->input('name');
    $Post->email = $request->input('email');
    $Post->text = $request->input('text');
    $Post->file = $request->input('file');
    return response()->json($Post);
  }

}

?>
