<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() { //fungsi eloquent menampilkan data menggunakan pagination 
        $users = user::all(); // Mengambil semua isi tabel 
        $posts = user::orderBy('id', 'desc')->paginate(6); 
        return view('admin.index', compact('users')); 
        with('i',(request()->input('page', 1 ) - 1 ) * 5);
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data 
        $request->validate([
             'telepon' => 'required', 
             'name' => 'required', 
             'email' => 'required', 
             'password' => 'required',
             ]);
             //fungsi eloquent untuk menambah data 
             user::create($request->all()); 
             
             //jika data berhasil ditambahkan, akan kembali ke halaman utama 
             return redirect()->route('admin.index') 
             ->with('success', 'user Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim user 
        $user = user::find($id); 
        return view('admin.detail', compact('user'));
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim user untuk diedit 
        $user = user::find($id); 
        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data 
        $request->validate([ 
            'id' => 'required',
            'telepon' => 'required', 
            'name' => 'required', 
            'email' => 'required', 
            'password' => 'required', ]);

            //fungsi eloquent untuk mengupdate data inputan kita 
            user::find($id)->update($request->all());

            //jika data berhasil diupdate, akan kembali ke halaman utama 
            return redirect()->route('admin.index') 
            ->with('success', 'user Berhasil Diupdate'); 
        
    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        user::find($id)->delete(); 
        return redirect()->route('admin.index') 
        -> with('success', 'user Berhasil Dihapus'); 
    }
};