<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function add_reservation(Request $request){
        $reservation = new Reservation();

        $reservation->full_name = $request->name;
        $reservation->email_address = $request->email;
        $reservation->phone_number = $request->phone;
        $reservation->number_of_persons = $request->people;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->special_request = $request->message;

        $reservation->save();

        return redirect()->route('user.index');

    }

    public function show_reserve(){
        $reservations = Reservation::all();

        return view("backend/reservation",compact('reservations'));
    }
}
