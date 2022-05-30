<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Edit;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;

class CartController extends Controller
{
    public function cart(){
        $cart = Cart::select('item.price','item.picture','item.item_name','cart.quantity')
        ->join("item", 'item.id','=','cart.item_id')
        ->where('cart.user_id',Auth::id())
        -> get();
        
        
        return view('cart',compact('cart'));
}
   
   
    
    
}