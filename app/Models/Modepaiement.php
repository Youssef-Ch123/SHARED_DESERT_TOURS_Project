<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modepaiement extends Model
{
    use HasFactory;
    protected $table='modepaiements';

    // list of Bookings
    function Bookings(){
        return $this->hasMany(Booking::class);
    }
}
