<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
    ];
    
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}