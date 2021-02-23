<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
    	return view('pages.home');
    }
    
    public function contact(){
    	return view('pages.contact');
    }
    public function service(){
    	return view('pages.service');
    }
}
