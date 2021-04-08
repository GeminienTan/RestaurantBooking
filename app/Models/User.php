<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
 
    protected $fillable = [
        'name',
        'email',
        'password',
        'contact_number'
    ];
 
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function feedbacks(){
        return $this->hasMany('App\Models\Feedback');
    }

}
