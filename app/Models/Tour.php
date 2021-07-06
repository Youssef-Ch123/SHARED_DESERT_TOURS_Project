<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table='tours';

    // object agency
    function Agency(){
        return $this->belongsTo(Agency::class);
    }

    // list of Groups
    function Groups(){
        return $this->hasMany(Group::class);
    }

    // list of details
    function Details(){
        return $this->hasMany(Detailtour::class);
    }

    // list of images
    function Images(){
        return $this->hasMany(Image::class);
    }


    // list of TransportMeans
    function TransportMeans(){
        return $this->belongsToMany(Moytransport::class,'groups');
    }
}
