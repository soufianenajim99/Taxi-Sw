<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'depart',
    //     'arrivee',
    //     'driver_id'
    // ];

    // public function driver(){
    //     return $this->belongsTo(Driver::class);
    // } 
}