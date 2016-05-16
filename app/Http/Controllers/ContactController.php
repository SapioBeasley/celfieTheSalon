<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sapioweb\Geocode\GeoCode;
use App\Http\Requests;

class ContactController extends Controller
{
	public function contactIndex()
	{
		$geocode = new Geocode;

		$geocode = $geocode->getCoordinates('4210 W Craig Rd Ste 109 Las Vegas, NV 89032');

		return view('contact.index')->with([
			'addressGeometry' => $geocode['geometry']['location'],
		]);
	}
}
