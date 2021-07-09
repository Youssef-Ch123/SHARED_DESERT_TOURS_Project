<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Bookings=DB::select('select b.id,t.Title,g.id as Group_id,b.Date,tr.FirstName,tr.LastName,tr.id as Travler_id, b.Validated from bookings as b,groups as g,tours as t, travlers as tr where b.group_id=g.id and g.tour_id=t.id and b.travler_id=tr.id and t.agency_id = ?',[Auth::user()->id]);
        return view('bookings.index',['Bookings'=>$Bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $b=Booking::find($id);
        $b->Validated="Yes";
        $b->save();
        return redirect()->route('Bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $b=Booking::find($id);
        $b->Validated="No";
        $b->save();
        return redirect()->route('Bookings.index');
    }

    public function SearchByDate(Request $request){
        $Bookings=DB::select('SELECT b.id,t.Title,g.id as Group_id,b.Date,tr.FirstName,tr.LastName,tr.id as Travler_id, b.Validated from bookings as b,groups as g,tours as t, travlers as tr where b.group_id=g.id and g.tour_id=t.id and b.travler_id=tr.id and t.agency_id = ? and b.Date between ? and ? ', [Auth::user()->id,$request->Date1, $request->Date2]);

        $s="";$cpt=0;
        foreach ($Bookings as $booking){
            $cpt++;
                        $s.="
                        <tr data-row='0' class='kt-datatable__row kt-datatable__row--even' >

                        <td class='kt-datatable__cell--center kt-datatable__cell' data-field='RecordID' style='width: 5%;text-align: left'>
                            <a class='kt-datatable__toggle-subtable'  data-value='1' title='Load sub table'><i class='fa fa-caret-right'></i></a>
                        </td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 5%;text-align: left'><span>".$booking->id."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 15%;text-align: left'><span >".$booking->Title."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 10%;text-align: left'><span>".$booking->Group_id."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 15%;text-align: left'><span >".$booking->Date."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 15%;text-align: left'><span >".$booking->FirstName." ".$booking->LastName."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 10%'><span id='span'>
                            ".$booking->Validated."
                        </span></td>


                        <td data-field='Actions' class='kt-datatable__cell' style='width: 15%;text-align: center'><span style='overflow: visible; position: relative;'>
                        <a href='javascript:;' class='btn btn-sm btn-outline-success btn-icon btn-icon-md' title='Edit details'>		                      <i data-bs-toggle='modal' data-bs-target='#exampleModal'".$cpt." class='la la-check-square'></i>		                  </a>
                        <a href='javascript:;'  data-bs-toggle='modal' data-bs-target='#exampleModal22'".$cpt." class='btn btn-sm btn-outline-danger btn-icon btn-icon-md' title='Delete'>		                      <i class='la la-close'></i>		                  </a>		              </span></td>


                    </tr>
                        ";

        }

        return $s;
    }


    public function SearchByTravler(Request $request){
        $Bookings=DB::select('SELECT b.id,t.Title,g.id as Group_id,b.Date,tr.FirstName,tr.LastName,tr.id as Travler_id, b.Validated from bookings as b,groups as g,tours as t, travlers as tr where b.group_id=g.id and g.tour_id=t.id and b.travler_id=tr.id and t.agency_id = ? and tr.id = ?', [Auth::user()->id,$request->Travler_id]);

        $s="";$cpt=0;
        foreach ($Bookings as $booking){
            $cpt++;
                        $s.="
                        <tr data-row='0' class='kt-datatable__row kt-datatable__row--even' >

                        <td class='kt-datatable__cell--center kt-datatable__cell' data-field='RecordID' style='width: 5%;text-align: left'>
                            <a class='kt-datatable__toggle-subtable'  data-value='1' title='Load sub table'><i class='fa fa-caret-right'></i></a>
                        </td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 5%;text-align: left'><span>".$booking->id."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 15%;text-align: left'><span >".$booking->Title."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 10%;text-align: left'><span>".$booking->Group_id."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 15%;text-align: left'><span >".$booking->Date."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 15%;text-align: left'><span >".$booking->FirstName." ".$booking->LastName."</span></td>

                        <td data-field='LastName' class='kt-datatable__cell' style='width: 10%'><span id='span'>
                            ".$booking->Validated."
                        </span></td>


                        ".
                            $request->str
                        ."


                    </tr>
                        ";
        }

        return $s;
    }
}
