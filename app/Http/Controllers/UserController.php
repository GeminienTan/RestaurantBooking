<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use App\Models\Reservation;
use App\Models\Feedback;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function index(){
            $users = User::all();
<<<<<<< HEAD
            $reservations = Reservation::with('users')->get();
            
            return view('user', compact('reservations', 'items'));

            
=======
            //$reservations = Reservation::all();
            //$reservations = Reservation::with('users')->get();
            //$items = Item::all();
            //return view('user', compact('reservations', 'items'));
            return view('user');
>>>>>>> 86642c43531606db590a21a8f23169d06d5c980e
        }
        
        public function store(Request $req){                
            $user = User::create($req->all());
            
            $user->role = 'user';
            $user->is_super = false;
            $user->remember_token  = $req->remember_token;
            return $user;
        }
        
        public function update(Request $req, $id){
            $user=User::findOrFail($id);
            $user->update($req->all());
            $user->role = 'user';
            $user->is_super = false;
            $user->remember_token  = $req->remember_token;
            return $user;
        }
        /*
        public function destroy($id){
            $user=User::findOrFail($id);
            $user->delete();
            return 204;
        }*/
        function deleteUser($id)
        {
            $data = User::find($id);
            $data -> delete();
            if(Gate::allows('isAdmin'))
                return view('user');
            else
                return view('login');
        }
}
