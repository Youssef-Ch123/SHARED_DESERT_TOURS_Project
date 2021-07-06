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
        try{
            $result=DB::select('select t.* from travlers as t,bookings as b, groups as g,tours as tr where tr.NumTour=g.tour_id and g.NumGroup=b.group_id and b.travler_id=t.IdTravler and tr.agency_id= ?',[Auth::user()->id]);
            /* $travlers=Travler::all();*/
            $bookings=Booking::all();
            $tours=Tour::all();
            $groups=Group::all();
            return view('travlers.AllTravlers',['travlers'=>$result,'bookings'=>$bookings,'tours'=>$tours,'groups'=>$groups]);
        }catch(Exception $ex){
            return view('travlers.AllTravlers',['travlers'=>'','bookings'=>'','tours'=>'','groups'=>'']);
        }
        
    }
}
