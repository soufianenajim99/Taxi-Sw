<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
      }


}