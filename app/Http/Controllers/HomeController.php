<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('restaurant',['items'=> $items]);
    }
}
