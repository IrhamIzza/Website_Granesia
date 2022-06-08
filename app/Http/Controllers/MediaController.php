<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;


class MediaController extends Controller
{
    public function Tanah(){
        $media = media::find($id= 1);
        return view ('media-detail')
            ->with ('med', media::index())
            ->with ('med', $media);
    }
    
    public function Arang(){
        $media = media::find($id= 2);
        return view ('media-detail')
        ->with ('med', media::index())
        ->with ('med', $media);
    }
    public function Humus(){
        $media = media::find($id= 3);
        return view ('media-detail')
            ->with ('med', media::index())
            ->with ('med', $media);
    }
    
    public function Sekam(){
        $media = media::find($id= 4);
        return view ('media-detail')
            ->with ('med', media::index())
            ->with ('med', $media);
    }

    public function Media(){
        $media = media::get()->all();
        return view ('mediatanam')
            ->with ('med', media::index())
            ->with ('med', $media);
    }
}
