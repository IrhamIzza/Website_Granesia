<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Edit;

use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function kaktus(){
        return view('detailtanaman.kaktus');
}

    public function oxalis(){
    return view('detailtanaman.oxalis');
}
    public function tanah(){
    return view('detailtanaman.tanah');
}  
    public function tanaman(){
    return view('tanaman');
}
}