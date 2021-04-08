<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use App\Models\Reservation;
use App\Models\Feedback;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function index(){
            $users = User::all();
            //$reservations = Reservation::all();
            //$reservations = Reservation::with('users')->get();
            //$items = Item::all();
            //return view('user', compact('reservations', 'items'));
            return view('user');
        }
        
        public function store(Request $req){                
            $user = User::create($req->all());
            
            $user->role = 'user';
            $user->is_super = false;
            $user->remember_token  = $req->remember_token;
            return $user;
        }

        public function updateUser(Request $req, $id){
            $this->validate($req, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'contact_number' => 'required|min:10|max:11',
                'password' => 'required|string|min:8'
            ]);
            $user = User::find($req->id);
            $user->status = $req->status;
            $user->save();
            return redirect("user")->with('success','Record Updated');
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
