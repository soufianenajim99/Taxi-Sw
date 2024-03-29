<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traject extends Model
{
    use HasFactory;

    protected $fillable = [
        'depart',
        'arrivee',
        'driver_id'
    ];

    public function driver(){
        return $this->belongsTo(Driver::class);
    } 
    public function reservation(){
          return $this->hasOne(Reservation::class);
    }
}