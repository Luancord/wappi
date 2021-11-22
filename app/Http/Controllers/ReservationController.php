<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function info_room($code){
        return Reservation::where('codigo', $code)->get();
        #return Reservation::all();
    }
}
