<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
   public function index() {
   		return view('pages.index');
   }

    public function about() {
    	return view('pages.about');
    }

    public function contact() {
    	$name = "Goran";
    	$people = ['Goran', 'Pera', 'Tamara'];
    	return view('pages.contact', compact('name', 'people'));
    }
}
