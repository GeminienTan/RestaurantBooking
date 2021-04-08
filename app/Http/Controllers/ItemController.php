<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
 
    public function index(){
        $items = Item::all();
        return view('restaurant',['items'=> $items]); 
    }
    
    public function store(Request $req){
        $item = Item::create($req->all());
        $item->photo = $req->photo;
        $item ->save();
        return $item;
    }
    
    public function update(Request $req, $id){
        $item=Item::findOrFail($id);
        $item->update($req->all());
        $item->photo = $req->photo;
        return $item;
    }
    
    public function destroy($id){
        $item=Item::findOrFail($id);
        $item->delete();
        return 204;
    }
}