<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table='feedbacks';

    // objet Travler
    function Travler(){
        return $this->belongsTo(Travler::class);
    }
    // objet Booking
    function Booking(){
        return $this->belongsTo(Booking::class);
    }
}
