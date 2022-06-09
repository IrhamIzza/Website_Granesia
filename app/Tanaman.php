<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tanaman extends Model
{
    use HasFactory, Notifiable;
    protected $table="tanaman";
    protected $primaryKey = 'id';

    public static function index(){
        return tanaman::all();
    }
    
    // public function payment(){
    //     return $this->hasMany(Payment::class);
    // }

    protected $fillable = [
        'id',
        'judul',
        'text1',
        'text2',
        'image',
    ];
}