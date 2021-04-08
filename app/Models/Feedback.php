<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    public $table="feedbacks";
    
    protected $fillable = [
        'service',
        'food',
        'environment',
        'comment',
        'user_id'
    ]; 

    public function user(){
        return $this -> belongsTo('App\Models\User'); 
    }
}
