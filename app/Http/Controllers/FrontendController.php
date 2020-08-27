<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function home(){
    	return view('frontend.home');
    }

    public function room(){
    	return view('frontend.room');
    }
    
    public function frontendgallery(){
        return view('frontend.gallery');
    }

    public function frontendcontact(){
    	return view('frontend.contact');
    }

    public function frontendabout(){
        return view('frontend.about');
    }

    public function frontendcheckout(){
        return view('frontend.checkout');
    }

    public function frontendregister(){
        return view('frontend.register');
    }

    public function frontendlogin(){
        return view('frontend.login');
    }
}
