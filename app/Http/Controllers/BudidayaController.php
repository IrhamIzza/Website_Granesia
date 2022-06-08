<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budidaya;


class BudidayaController extends Controller
{
    public function Oxalis(){
        $budidaya = budidaya::find($id= 1);
        return view ('budidaya-detail')
            ->with ('bud', budidaya::index())
            ->with ('bud', $budidaya);
    }
    
    public function Sirih(){
        $budidaya = budidaya::find($id= 2);
        return view ('budidaya-detail')
        ->with ('bud', budidaya::index())
        ->with ('bud', $budidaya);
    }
    public function Monstera(){
        $budidaya = Budidaya::find($id= 3);
        return view ('budidaya-detail')
            ->with ('bud', budidaya::index())
            ->with ('bud', $budidaya);
    }
    
    public function Kuping(){
        $budidaya = budidaya::find($id= 4);
        return view ('budidaya-detail')
            ->with ('bud', budidaya::index())
            ->with ('bud', $budidaya);
    }

    public function Budidaya(){
        $budidaya = budidaya::get()->all();
        return view ('budidaya')
            ->with ('bud', budidaya::index())
            ->with ('bud', $budidaya);
    }


}
