<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomType;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('backend.rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes = RoomType::all();
        return view('backend.rooms.create',compact('roomtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validatioin
        // dd($request);
        $request -> validate([
            
            'rnumber'=>'required',
            'name'=>'required',
            'photo'=>'required',
            'description'=>'required',
            'rate'=>'required',

        ]);

         //If file included, upload
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/roomimages'),$imageName);

        $myfile = 'backend/roomimages/'.$imageName;

        //Data Insert
        $room = new Room();
        $room->rnumber = $request->rnumber;
        $room->name = $request->name;
        $room->photo = $myfile;
        $room->description = $request->description;
        $room->roomtype_id = $request->roomtype;
        $room->rate = $request->rate;

        $room->save();

        //Redirect
        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($id);
        return view('backend.rooms.show',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomtypes = RoomType::all();
        $room = Room::find($id);
        return view('backend.rooms.create',compact('roomtypes','room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validatioin
        $request -> validate([
            
            'rnumber'=>'required',
            'name'=>'required',
            'photo'=>'required',
            'description'=>'required',
            'rate'=>'required',

        ]);

        //If file included, upload
        if($request->hasFile('photo')){

            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/roomimages'),$imageName);

            $myfile = 'backend/roomimages/'.$imageName;

        }else{
            $myfile = $request->oldphoto;
         }


        //Data Update
        $room =Room::find($id);
        $room->rnumber = $request->rnumber;
        $room->name = $request->name;
        $room->photo = $myfile;
        $room->description = $request->description;
        $room->rate = $request->rate;

        $room->save();

        //Redirect
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect()->route('room.index');
    }
}
