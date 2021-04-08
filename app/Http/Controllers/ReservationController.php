<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
    public function index(){
        if (Gate::allows('isAdmin')){
            $data = Reservation::simplePaginate(7);
            $count = Reservation::count();   
            return view('reservation',  ['reservations' =>$data, 'counts' =>$count]);      
        }
        else{ //user only can see his reservation
            $id = Auth::id();
            $reservations = Reservation::where('user_id', '=', $id)->get();
            //return view('user', ['reservations'=>$reservations]);
        }
    }

    public function store(Request $req){

        $this->validate($req, [
            'num_of_person' => 'required',
            'booking_date' => 'required',
            'message' => 'max:1000',
        ]);

        $reservation = new Reservation();
        $reservation->num_of_person = $req->num_of_person;
        $reservation->booking_date = $req->booking_date;
        $reservation->message = $req->message;
        $reservation->message = $req->message;
        $reservation->user_id = $req->id;
        
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
