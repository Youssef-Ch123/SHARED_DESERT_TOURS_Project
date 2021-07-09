<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Group;
use App\Models\Tour;
use App\Models\Travler;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TravlerController extends Controller
{
    public function AllTravlers(Request $id){
        $Travlers=DB::select('SELECT tr.*, t.Title, b.Date, b.N_Places

        from bookings as b,groups as g,tours as t, travlers as tr

        where b.group_id=g.id and g.tour_id=t.id and b.travler_id=tr.id and t.agency_id = ?', [Auth::user()->id]);

        return view('travlers.AllTravlers',['Travlers'=>$Travlers]);

    }
}
