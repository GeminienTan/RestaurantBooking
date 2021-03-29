<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
class ReservationController extends Controller
{
    public function index(){
        $reservation = Reservation::all(); 
        return $reservation;
    }

    public function store(Request $req){
        return Reservation::create($req->all());
    }

    public function update(Request $req, $id){
        $reservation = Reservation::findOrFail($id);
        $reservation->update($req->all());
        return $reservation;
    }  

    public function destroy($id){
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return 204;
    }  
}
