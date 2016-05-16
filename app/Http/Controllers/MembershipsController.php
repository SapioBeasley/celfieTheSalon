<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MembershipsController extends Controller
{
	public function membershipsIndex()
	{
		return view('memberships.index');
	}
}
