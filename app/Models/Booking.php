<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table='bookings';

    // objet Travler
    function Travler(){
        return $this->belongsTo(Travler::class);
    }

    // objet Group
    function Group(){
        return $this->belongsTo(Group::class);
    }

    // objet PaiementMode
    function PaiementMode(){
        return $this->belongsTo(Modepaiement::class);
    }

    // list of FeedBack
    function FeedBacks(){
        return $this->hasMany(Feedback::class);
    }
}
