<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Edit;

use Illuminate\Http\Request;

class Admin1Controller extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
}

    public function tabel(){
    return view('admin.tables');
}
    public function billing(){
    return view('admin.billing');
}

    public function profile(){
    return view('admin.profile');
}

}