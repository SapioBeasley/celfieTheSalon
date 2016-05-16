<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
	public function galleryIndex()
	{
		return view('gallery.index');
	}
}
