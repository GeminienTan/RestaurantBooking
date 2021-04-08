<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class FeedbackController extends Controller
{
    function index(){
        //admin can view all people feedback
        if (Gate::allows('isAdmin')){
            $data = Feedback::simplePaginate(7);
            $count = Feedback::count();
            return view("feedbackAdmin", ['feedbacks' =>$data, 'counts' =>$count]);    
        }
        else{ //user only can see his feedback
            $id = Auth::id();
            $feedbacks = Feedback::where('user_id', '=', $id)->get();
            return view('user', ['feedbacks'=>$feedbacks]);
        }
    }

    function store(Request $req){

        $this->validate($req, [
            'service' => 'required',
            'food' => 'required',
            'environment' => 'required',
        ]);
        
        $feedback = new Feedback();
        $feedback->service = $req->service;
        $feedback->food = $req->food;
        $feedback->environment = $req->environment;
        $feedback->comment = $req->comment;
        $feedback->user_id = $req->id;
        
        $feedback ->save();
        
        return redirect("user")->with('success', 'Record added successfully!');
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
