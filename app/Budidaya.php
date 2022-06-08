<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Budidaya extends Model
{
    use HasFactory, Notifiable;
    protected $table="budidaya";
    protected $primaryKey = 'id';

    public static function index(){
        return budidaya::all();
    }
    
    // public function payment(){
    //     return $this->hasMany(Payment::class);
    // }

    protected $fillable = [
        'id',
        'judul',
        'dekripsi',
        'text1',
        'text1b',
        'text2',
        'text2b',
        'text3',
        'text3b',
        'image',
        'slug',
    ];
}
