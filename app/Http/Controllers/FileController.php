<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
	public function upload(request $req)
	{
		$path = Storage::putFileAs('public', $req->file('userfile'), $req->user()->id . '.jpg' );
	}
}
