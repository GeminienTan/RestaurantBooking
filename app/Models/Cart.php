<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'item_id'
    ]; 

    public function reservation(){
        return $this -> belongsTo('App\Models\Reservation'); 
    }
}
