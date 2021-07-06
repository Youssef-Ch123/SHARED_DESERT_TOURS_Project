<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agency;
use App\Models\User;
use Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class AgencyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('IndexAgency');
    }



    public function AddAgency(){
        return view('InscriptionAgency');
    }
    public function SignIn(){
        return view('AuthentificationAgency');
    }

    public function StoreAgency(Request $request){
        $agency=new Agency();
        $agency->Name=$request->input('Name');
        $agency->Adress=$request->input('Adress');
        $agency->Tel=$request->input('Tel');
        $agency->Fax=$request->input('Fax');
        $agency->Email=$request->input('Email');
        $agency->Password=$request->input('Password');

        $agency->save();
        return view('InscriptionAgency', ['msg'=>'confirm']);
    }

    public function Profile(){
        $agency=Agency::find(Auth::user()->id);
        return view('agency.profile')->with(['agency'=>$agency]);
    }
    public function updateProfile(Request $request){
        $agency=Agency::findOrFail(Auth::user()->id);
        $agency->name=$request->input('name');
        $agency->Tel=$request->input('Tel');
        $agency->Fax=$request->input('Fax');
        $agency->Adress=$request->input('Address');
        $agency->email=$request->input('email');
        $agency->password=$request->input('password');
        if($request->hasFile('file')){
            $file=$request->file('file');
            $extension=$file->getClientOriginalExtension();
            $fileName='/uploads/Agency/'.time().".".$extension;
            $file->move('uploads/Agency/',$fileName);
            $agency->image=$fileName;
        }
        $agency->save();
        return view('agency.profile')->with(['agency'=>$agency]);
    }
}
