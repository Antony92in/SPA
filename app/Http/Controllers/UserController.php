<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Storage;
use App\Post;


class UserController extends Controller
{
   public function index(Request $req)
   {	
   		$pic = $req->user()->pichash;
   		
   		return $pic;
   }

   public function store(Request $req)
   {
   		$post = new Post;

   		$post->user_id = $req->user()->id;

   		$post->title = $req->title;

   		$post->author = $req->user()->name;

   		$post->content = $req->content;

   		$post->save();
   }
}
