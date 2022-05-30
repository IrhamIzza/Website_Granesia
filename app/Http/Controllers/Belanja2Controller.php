<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Edit;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;

class Belanja2Controller extends Controller
{
    public function belanja2(){
        $item = Item::get()->toArray();
        return view('belanja',compact('item'));
}
    public function tambahkeranjang(Request $request)
    {
        Cart::create([
            'user_id' => Auth::id(),
            'item_id' => $request -> id,
            'quantity' => 1,
        ]);
        return redirect("belanja2");
    }
    
}