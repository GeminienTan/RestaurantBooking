<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
<<<<<<< HEAD

=======
    public $table="reservations";
>>>>>>> 86642c43531606db590a21a8f23169d06d5c980e
    protected $fillable = [
        'num_of_person',
        'booking_date',
        'message',
        'user_id'
    ]; 

    public function user(){
        return $this -> belongsTo('App\Models\User'); 
    }

}
