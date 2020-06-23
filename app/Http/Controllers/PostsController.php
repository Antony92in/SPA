<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class PostsController extends Controller
{
    public function store(Request $req)
   {
   		$post = new Post;

   		$post->user_id = $req->user()->id;

   		$post->title = $req->title;

   		$post->author = $req->user()->name;

   		$post->content = $req->content;

   		$post->save();
   }

   public function getposts()
   {
   		$posts = Post::all();

  		return $posts;
   }
}
