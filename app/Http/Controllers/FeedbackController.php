<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function index(){
        $feedback = Feedback::all(); 
        return $feedback;
    }

    public function store(Request $req){
        return Feedback::create($req->all());
    }

    public function update(Request $req, $id){
        $feedback = Feedback::findOrFail($id);
        $feedback->update($req->all());
        return $feedback;
    }  

    public function destroy($id){
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return 204;
    }  
}
