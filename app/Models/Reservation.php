<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure_date',
        'traject_id',
        'driver_id',
        'passenger_id',
        'payement_type',
    ];

    public function driver(){
        return $this->belongsTo(Driver::class);
    } 
    public function passenger(){
        return $this->belongsTo(Passenger::class);
    } 
    public function  traject(){
        return $this->belongsTo(Traject::class);
    }

    public function favorie(){
        return $this->belongsTo(Favorite::class);
    }


}