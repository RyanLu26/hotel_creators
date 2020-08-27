<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
// use App\Item;

class FrontendController extends Controller
{
     public function home(){
        $rooms=Room::all();
        // $items=Item::all();
    	return view('frontend.home',compact('rooms'));
    }

    public function room(){
        $rooms=Room::all();
    	return view('frontend.room',compact('rooms'));
    }

    public function frontenddetail($id){
        

        $room = Room::find($id);
        // dd($item);
        return view('frontend.detail', compact('room'));
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

    public function getRooms(Request $request){
        $sid = $request->sid;
        if($sid == 0){
            $rooms = Room::all();
        }else{
            $rooms = reservation::find($sid)->room;
        }
        
        return $rooms;
    }
}
