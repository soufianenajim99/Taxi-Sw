<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_ve',
        'num_pla',
        'description',
        'user_id'
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
      }

      public function user(){
        return $this->belongsTo(User::class);
    }
    public function trajects(){
        return $this->hasMany(Traject::class);
    }

}