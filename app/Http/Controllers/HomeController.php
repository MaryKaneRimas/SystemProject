<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home(){
    	return view('home');
    }
    public function Elements(){
    	return view('Elements');
    }
    public function Generics(){
    	return view('Generics');
    }
}
