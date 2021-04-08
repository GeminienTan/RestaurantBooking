<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use App\Models\Reservation;
use App\Models\Feedback;

use Illuminate\Http\Request;

class UserController extends Controller
{
        public function index(){
            $users = User::all();
            $reservations = Reservation::with('users')->get();
            
            return view('user', compact('reservations', 'items'));

            
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
        
        public function destroy($id){
            $user=User::findOrFail($id);
            $user->delete();
            return 204;
        }
}
