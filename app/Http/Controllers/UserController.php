<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
   public function index()
   {
   		$user = User::where('id', 1)->get();

   		return $user;
   }
}
