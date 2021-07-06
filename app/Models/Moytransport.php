<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moytransport extends Model
{
    use HasFactory;
    protected $table='moytransports';

    // list of Groups
    function Groups(){
        return $this->hasMany(Group::class);
    }
    // list of Tours
    function Tours(){
        return $this->belongsToMany(Tour::class,'groups');
    }
}
