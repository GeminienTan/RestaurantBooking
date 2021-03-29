<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_of_person',
        'booking_date',
        'message',
        'user_id'
    ]; 

    public function user(){
        return $this -> belongsTo('App\Models\User'); 
    }
    
    public function cart(){
        return $this->hasOne('App\Models\Cart');
    }
}
