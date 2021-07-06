<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table='groups';

    // object Tour
    function Tour(){
        return $this->belongsTo(Tour::class);
    }

    
    // object Moytransport
    function Moytransport(){
        return $this->belongsTo(Moytransport::class);
    }
    // list of Travlers
    function Travlers(){
        return $this->belongsToMany(Travler::class,'bookings');
    }
}
