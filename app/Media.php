<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Media extends Model
{
    use HasFactory, Notifiable;
    protected $table="media";
    protected $primaryKey = 'id';

    public static function index(){
        return media::all();
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
