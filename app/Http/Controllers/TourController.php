<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Detailtour;
use App\Models\Group;
use App\Models\Image;
use App\Models\Moytransport;
use App\Models\Tour;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tours.AllTours',['tours'=>Tour::all()->where('agency_id','like',Auth::user()->id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $transports=Moytransport::all();
        return view('tours.AddTour',['transports'=>$transports]);
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
        $tour=new Tour();
        $tour->Title=$request->Title;
        $tour->Start_Date=$request->Start_Date;
        $tour->Start_Time=$request->Start_Time;
        $tour->Duration=$request->Duration;
        $tour->Start_Address=$request->input('Country')." / ".$request->input('Street')." / ".$request->input('City')." / ".$request->input('State')." / ".$request->input('ZipCode');
        $tour->agency_id=Auth::user()->id;


        if($request->hasFile('image1')){
            $file=$request->file('image1');
            $extension=$file->getClientOriginalExtension();
            $fileName='/uploads/Tours/'.time().".".$extension;
            $file->move('uploads/Tours/',$fileName);

            $tour->image=$fileName;
            $tour->save();
        }else
            $tour->save();

        if($request->hasFile('file')){
            foreach($request->file('file') as $file){
                $extension=$file->getClientOriginalExtension();
                $fileName='/uploads/Tours/'.time().".".$extension;
                $file->move('uploads/Tours/',$fileName);

                $image=new Image();
                $image->src=$fileName;
                $image->tour_id=$tour->id;
                $image->save();
            }
        }

        $detail=new Detailtour();
        $detail->Title="What we'll do";
        $detail->Description=$request->input('Description');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="Where should guests meet you?";
        $detail->Description=$request->input('Country')." | ".$request->input('City')." | ".$request->input('Street')." | ".$request->input('State')." | ".$request->input('ZipCode');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="Describe the location";
        $detail->Description=$request->input('locationDiscr');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="Who will be operating the vehicle when driving?";
        $detail->Description=$request->input('radio');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="DRINKS";
        $detail->Description=$request->input('DRINKS');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="TRANSPORTATION";
        $detail->Description=$request->input('textAr_Transport');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="Minimum age";
        $detail->Description=$request->input('cboMinAge');
        $tour->Details()->save($detail);


        $detail=new Detailtour();
        $detail->Title="Does experience have any accessibility features? (optional)";
        $detail->Description=$request->input('bringKids');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="What activity level should people expect?";
        $detail->Description=$request->input('rdLevel');
        $tour->Details()->save($detail);

        $detail=new Detailtour();
        $detail->Title="What skill level is required?";
        $detail->Description=$request->input('rdLevelSkill');
        $tour->Details()->save($detail);

            $detail=new Detailtour();
            $detail->Title="What guests should bring?";
            $detail->Description=$request->input('brings');
            $tour->Details()->save($detail);


        $group=new Group();
        $group->id=count(Group::all())+1;
        $group->Group_Size=$request->input('Group_Size');
        $group->Prix=$request->input('Prix');
        $group->Cutoff_Time_Booking=$request->input('Cutoff_Time_Booking');
        $group->Cutoff_Time_RmBooking=$request->input('Cutoff_Time_RmBooking');
        $group->tour_id=$tour->id;

        $moy=Moytransport::all()->where('moyTrans','like',$request->input('radioTransport'))->first();
        $group->moy_id=$moy->id;

        $group->save();


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
        $tour=Tour::findOrFail($id);
        $tour->Title=$request->Title;
        $tour->Start_Date=$request->Start_Date;
        $tour->Start_Time=$request->Start_Time;
        $tour->Duration=$request->Duration;
        $tour->Start_Address=$request->input('Start_Address');


        if($request->hasFile('image1')){
            $file=$request->file('image1');
            $extension=$file->getClientOriginalExtension();
            $fileName='/uploads/Tours/'.time().".".$extension;
            $file->move('uploads/Tours/',$fileName);

            $tour->image=$fileName;
        }
        $tour->save();
        return redirect()->route("Tours.index");
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
        $tour=Tour::find($id);
        $tour->delete();
        return redirect()->route('Tours.index');
    }


    public function availability(){

        $groups=DB::select('SELECT t.id,t.Title,t.image,g.prix,g.Group_Size,sum(b.N_Places) as nbr FROM groups as g, tours as t, bookings as b WHERE g.tour_id=t.id and g.id=b.group_id and t.agency_id= ?
        group by t.id,t.Title,t.image,g.prix,g.Group_Size',[Auth::user()->id]);


        return view('tours.Availability',['tours'=>$groups]);
    }

    public function SearchByTitle(Request $request){

        $tours=DB::select('SELECT t.id,t.Title,t.image,g.prix,g.Group_Size,sum(b.N_Places) as nbr FROM groups as g, tours as t, bookings as b WHERE g.tour_id=t.id and g.id=b.group_id and t.agency_id= ? and t.Title= ?
        group by t.id,t.Title,t.image,g.prix,g.Group_Size', [Auth::user()->id,$request->Title]);
        $s="";
        foreach ($tours as $tour){
                        $s.="
                        <tr data-row='0' class='kt-datatable__row kt-datatable__row--even' style='text-align: center'>

                        <td class='kt-datatable__cell--center kt-datatable__cell' data-field='RecordID'>
                            <a class='kt-datatable__toggle-subtable'  data-value='1' title='Load sub table' style='width: 30px;'><i class='fa fa-caret-right' style='width: 30px;'></i></a>
                        </td>

                        <td data-field='Company' class='kt-datatable__cell'><span style='width: 100px;'><img width='80px' height='100px' src='".$tour->image."'></span></td>

                        <td data-field='LastName' class='kt-datatable__cell'><span style='width: 150px;'>".$tour->Title."</span></td>

                        <td data-field='FirstName' class='kt-datatable__cell'><span style='width: 150px;'>".$tour->Group_Size."</span></td>

                        <td data-field='FirstName' class='kt-datatable__cell'><span style='width: 150px;'>".($tour->Group_Size - $tour->nbr)."</span></td>
                    </tr>";
        }

        return $s;

    }


    public function SearchByAvail(Request $request){

        $tours=DB::select('SELECT t.id,t.Title,t.image,g.prix,g.Group_Size,sum(b.N_Places) as nbr FROM groups as g, tours as t, bookings as b WHERE g.tour_id=t.id and g.id=b.group_id and t.agency_id= ?
        group by t.id,t.Title,t.image,g.prix,g.Group_Size
        having (g.Group_Size - sum(b.N_Places))>?', [Auth::user()->id,$request->nbr]);
        $s="";
        foreach ($tours as $tour){
                        $s.="
                        <tr data-row='0' class='kt-datatable__row kt-datatable__row--even' style='text-align: center'>

                        <td class='kt-datatable__cell--center kt-datatable__cell' data-field='RecordID'>
                            <a class='kt-datatable__toggle-subtable'  data-value='1' title='Load sub table' style='width: 30px;'><i class='fa fa-caret-right' style='width: 30px;'></i></a>
                        </td>

                        <td data-field='Company' class='kt-datatable__cell'><span style='width: 100px;'><img width='80px' height='100px' src='".$tour->image."'></span></td>

                        <td data-field='LastName' class='kt-datatable__cell'><span style='width: 150px;'>".$tour->Title."</span></td>

                        <td data-field='FirstName' class='kt-datatable__cell'><span style='width: 150px;'>".$tour->Group_Size."</span></td>

                        <td data-field='FirstName' class='kt-datatable__cell'><span style='width: 150px;'>".($tour->Group_Size - $tour->nbr)."</span></td>
                    </tr>";
        }

        return $s;

    }
}
