<?php

namespace App\Http\Controllers;

use App\Models\Moytransport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MoyTransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transportations = Moytransport::all();
        return view("Transportation.index",["transports"=>$transportations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Transportation.create');
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
        $Transport=new Moytransport();
        $Transport->moyTrans=$request->input('Name');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $fileName='/uploads/Transportations/'.time().".".$extension;
            $file->move('uploads/Transportations/',$fileName);
            $Transport->image=$fileName;
        }


        //$image=$request->input('image');

        /* $img = str_replace('data:image/png;base64,', '',$image);
        $img = str_replace(' ', '+',$img);
        $imageName= Str::random(10);$imageName.=".png";
        Storage::disk('local')->put($imageName,base64_decode($img));
        $path="/storage/$imageName";

        $Transport->image=$path;
*/
        $Transport->save();
        return redirect()->route('Transportations.index')->with('status','Transportation added successfully !!');
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
        dd(Moytransport::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $transp=Moytransport::findOrFail($id);
        $transp->moyTrans=$request->input('Name');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $fileName='/uploads/Transportations/'.time().".".$extension;
            $file->move('uploads/Transportations/',$fileName);
            $transp->image=$fileName;
        }
        $transp->save();
        return redirect()->route('Transportations.index')->with('status','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Moytransport::destroy($id);
        return redirect()->route('Transportations.index');
    }
}
