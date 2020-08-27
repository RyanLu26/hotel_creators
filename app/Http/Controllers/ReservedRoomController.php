<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservedRoom;
use App\Room;
use App\RoomType;
use App\Reservation;
use App\Guest;

class ReservedRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservedrooms = ReservedRoom::all();
        // dd($reservedrooms[0]->reservation->guest);
        return view('backend.reservedrooms.index',compact('reservedrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Validate
        // dd($request);

        //Insert
        $reservedroom = new ReservedRoom;
        $reservedroom->room_id = $request->room_id;
        $reservedroom->reservation_id = $request->reservation;
        $reservedroom->total = $request->room_rate;

        $reservedroom->save();

        //redirect
        return redirect()->route('reservedroom.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservedroom = ReservedRoom::find($id);
        $reservedroom->delete();

        return redirect()->route('reservedroom.index');
    }

     public function confirm($id)
    {
        $reserved = Reservation::find($id);
        $guest = Guest::find($reserved->guest_id);
        $room_type = RoomType::find($reserved->roomtype_id);
        $rooms = Room::all();
        
        return view('backend.reservedrooms.confirm', compact('reserved','guest','rooms', 'room_type'));
    }
}
