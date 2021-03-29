<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
class CartController extends Controller
{
    public function index(){
        $cart = Cart::all(); 
        return $cart;
    }

    public function store(Request $req){
        return Cart::create($req->all());
    }

    public function update(Request $req, $id){
        $cart = Cart::findOrFail($id);
        $cart->update($req->all());
        return $cart;
    }  

    public function destroy($id){
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return 204;
    }  
}
