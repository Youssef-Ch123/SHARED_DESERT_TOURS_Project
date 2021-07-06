<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travler extends Model
{
    use HasFactory;
    protected $table='travlers';

    // list of Groups
    function Groups(){
        return $this->belongsToMany(Group::class,'bookings');
    }

    // list of FeedBack
    function FeedBacks(){
        return $this->hasMany(Feedback::class);
    }
}
