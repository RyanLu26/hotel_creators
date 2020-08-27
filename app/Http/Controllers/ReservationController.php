<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Roomtype;
use App\Guest;
use App\ReservedRoom;

class ReservationController extends Controller
{

     public function __construct($value='')
    {
        $this->middleware('role:admin')->except('store');
        $this->middleware('role:customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=Reservation::all();
         $reservedrooms = ReservedRoom::all();
          $reservedRoomArray = [];

        foreach ($reservedrooms as $value) {
            array_push($reservedRoomArray, $value->reservation_id);
        }
        return view('backend.reservations.index',compact('reservations', 'reservedRoomArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request);
        //Validate
        $request->validate([

            'cin_date'=>'required',
            'cout_date'=>'required',
            'roomtype'=>'required',
            'adult'=>'required',
            'child'=>'required',

            'name'=>'required',
            'email'=>'required',
            'phoneno'=>'required',
            'address'=>'required',
            

        ]);

        //Data Insert
        $guest = new Guest();
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phoneno = $request->phoneno;
        $guest->address = $request->address;

        $guest->save();

        $reservation = new Reservation();
        $reservation->cin_date = $request->cin_date;
        $reservation->cout_date = $request->cout_date;
        $reservation->roomtype_id = $request->roomtype;
        $reservation->adult = $request->adult;
        $reservation->child = $request->child;
        $reservation->guest_id=$guest->id;

        $reservation->save();


        //Redirect
        return redirect()->route('homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation=Reservation::find($id);
        return view('backend.reservations.show',compact('reservation'));
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
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservation.index');
    }
}
