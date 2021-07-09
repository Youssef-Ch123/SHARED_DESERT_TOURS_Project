<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $FeedBacks=DB::select('SELECT f.id,t.Title,tr.FirstName,tr.LastName,f.N_Stars,f.Comment,f.Date, tr.id as Travler_id
        from bookings as b,groups as g,tours as t, travlers as tr, feedbacks as f
        where t.id=g.tour_id and g.id=b.group_id and b.travler_id=tr.id and f.booking_id=b.id and f.travler_id=tr.id and t.agency_id = ?',[Auth::user()->id]);
        return view('feedbacks.index',['FeedBacks'=>$FeedBacks]);
    }

    public function SearchByTitle(Request $request){
        $FeedBacks=DB::select('SELECT f.id,t.Title,tr.FirstName,tr.LastName,f.N_Stars,f.Comment,f.Date, tr.id as Travler_id
        from bookings as b,groups as g,tours as t, travlers as tr, feedbacks as f
        where t.id=g.tour_id and g.id=b.group_id and b.travler_id=tr.id and f.booking_id=b.id and f.travler_id=tr.id and t.Title = ? and t.agency_id = ?',[$request->Title, Auth::user()->id]);

        $s="";
        foreach ($FeedBacks as $FeedBack){
                        $s.='
                        <tr data-row="0" class="kt-datatable__row kt-datatable__row--even" >

                            <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID" style="width: 5%;text-align: left">
                                <a class="kt-datatable__toggle-subtable"  data-value="1" title="Load sub table"><i class="fa fa-caret-right"></i></a>
                            </td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 5%;text-align: left"><span >'.$FeedBack->id.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: center"><span >'.$FeedBack->Title.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >'.$FeedBack->Date.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >'.$FeedBack->FirstName.' '.$FeedBack->LastName.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >'.$FeedBack->N_Stars.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 20%;text-align: left"><textarea cols="30" readonly>'.$FeedBack->Comment.'</textarea></td>



                            <td data-field="Actions" class="kt-datatable__cell" style="width: 15%;text-align: center"><span style="overflow: visible; position: relative;">
                                <a href="javascript:;" class="btn btn-sm btn-outline-success btn-icon btn-icon-md" title="Edit details">		                      <i data-bs-toggle="modal" data-bs-target="" class="la la-check-square"></i>		                  </a>
                                <a href="javascript:;"  data-bs-toggle="modal" data-bs-target="" class="btn btn-sm btn-outline-danger btn-icon btn-icon-md" title="Delete">		                      <i class="la la-close"></i>		                  </a>		              </span></td>

                        </tr>

                        ';
        }

        return $s;
    }


    public function SearchByStars(Request $request){
        $FeedBacks=DB::select('SELECT f.id,t.Title,tr.FirstName,tr.LastName,f.N_Stars,f.Comment,f.Date, tr.id as Travler_id
        from bookings as b,groups as g,tours as t, travlers as tr, feedbacks as f
        where t.id=g.tour_id and g.id=b.group_id and b.travler_id=tr.id and f.booking_id=b.id and f.travler_id=tr.id and f.N_Stars = ? and t.agency_id = ?',[$request->Stars, Auth::user()->id]);

        $s="";
        foreach ($FeedBacks as $FeedBack){
                        $s.='
                        <tr data-row="0" class="kt-datatable__row kt-datatable__row--even" >

                            <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID" style="width: 5%;text-align: left">
                                <a class="kt-datatable__toggle-subtable"  data-value="1" title="Load sub table"><i class="fa fa-caret-right"></i></a>
                            </td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 5%;text-align: left"><span >'.$FeedBack->id.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: center"><span >'.$FeedBack->Title.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >'.$FeedBack->Date.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >'.$FeedBack->FirstName.' '.$FeedBack->LastName.'</span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span>
                                '.
                                $request->str
                                .'
                            </span></td>

                            <td data-field="LastName" class="kt-datatable__cell" style="width: 20%;text-align: left"><textarea cols="30" readonly>'.$FeedBack->Comment.'</textarea></td>



                            <td data-field="Actions" class="kt-datatable__cell" style="width: 15%;text-align: center"><span style="overflow: visible; position: relative;">
                                <a href="javascript:;" class="btn btn-sm btn-outline-success btn-icon btn-icon-md" title="Edit details">		                      <i data-bs-toggle="modal" data-bs-target="" class="la la-check-square"></i>		                  </a>
                                <a href="javascript:;"  data-bs-toggle="modal" data-bs-target="" class="btn btn-sm btn-outline-danger btn-icon btn-icon-md" title="Delete">		                      <i class="la la-close"></i>		                  </a>		              </span></td>

                        </tr>

                        ';
        }

        return $s;
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
    }
}
