<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Edit;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\User;
use DateTime;

class OrderController extends Controller
{
    public function order(){
        $cart = Cart::select('item.price','item.picture','item.item_name','cart.quantity')
        ->join("item", 'item.id','=','cart.item_id')
        ->where('cart.user_id',Auth::id())
        -> get();

        $user = User::select('users.id', 'users.name', 'profile.address','profile.number_telp')
        ->leftjoin("profile", 'users.id','=','profile.user_id')
        ->where('users.id',Auth::id())
        -> first();

        $time = date("Y-m-d H:i:s");
        $total = 0;
        foreach ($cart as $key => $value) {
            $total += $value -> price * $value -> quantity;
        }
      
        return view('order',compact(['cart','user','time','total']));
}
    
}