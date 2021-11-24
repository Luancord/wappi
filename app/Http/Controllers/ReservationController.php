<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function info_room($code){
        $reservation = Reservation::where('codigo', $code)->get();
        return ($reservation->isEmpty()) ? "incorrecto" : Reservation::where('codigo', $code)->get()[0];
        #return response()->json(Reservation::where('codigo', $code)->get()[0]);
        #return Reservation::all();
    }
}
