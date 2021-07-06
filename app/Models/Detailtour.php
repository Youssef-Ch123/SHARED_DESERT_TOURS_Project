<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailtour extends Model
{
    use HasFactory;
    protected $table="detailtours";
    
    // objet tour
    function Tour(){
        return $this->belongsTo(Tour::class);
    }
}
