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

        $this->validate($req, [
            'num_of_person' => 'required',
            'booking_date' => 'required',
            'message' => 'max:1000',
        ]);

        $reservation = new Reservation();
        $reservation->num_of_person = $req->service;
        $reservation->booking_date = $req->booking_date;
        $reservation->message = $req->message;
        $reservation->comment = $req->comment;
        $reservation->user_id = 1;
        
        $reservation ->save();

        return redirect("user")->with('success', 'Record added successfully!');
        //return Reservation::create($req->all());
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
