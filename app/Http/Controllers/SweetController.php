<?php

namespace App\Http\Controllers;

use App\Sweet;
use Illuminate\Http\Request;

class SweetController extends Controller
{
    public function getSweet () {
    	$sweets = Sweet::all();

    	return view('index', ['sweets' => $sweets]);
    }

    public function postSweet (Request $request) {
    	$sweet = new Sweet;
    	$sweet->name = $request->name;
    	$sweet->stock = $request->stock;

    	$sweet->save();

    	return back();
    }
}
