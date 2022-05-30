<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Edit;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;

class PaymentController extends Controller
{

    public function payment(Request $request)
    {
        $cart = Cart::select('item.id','item.price','item.picture','item.item_name','cart.quantity')
        ->join("item", 'item.id','=','cart.item_id')
        ->where('cart.user_id',Auth::id())
        -> get();

        $order = Order::create([
            'user_id' => Auth::id(),
            'status_id' => 6,
            'address' => $request -> address,
            'note' => $request -> note,
        ])->id;

        foreach ($cart as $key => $value) {
            Order_detail::create([
                'order_id' => $order,
                'item_id' => $value->id,
                'quantity' => $value -> quantity,
                'price' => $value -> price,
            ]);
        
        }
        $cart = Cart::where('cart.user_id', Auth::id())->delete();

        return redirect("belanja2");
    }
}