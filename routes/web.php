<?php

use App\Http\Controllers\MoyTransportController;
use App\Http\Controllers\PaimentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Accueil Travler
Route::get('/', function () {
    return view('Index');
});
//Inscription travler
Route::get('/SignUp', 'App\Http\Controllers\AuthentificationController@SignUp');
//Authentification travler
Route::get('/SignIn', 'App\Http\Controllers\AuthentificationController@SignIn');

//Inscription Agency
Route::get('Agency/SignUp', 'App\Http\Controllers\AgencyController@AddAgency');
//Authentification Agency
Route::get('Agency/SignIn', 'App\Http\Controllers\AgencyController@SignIn');
//Accueil Agency
Route::get('/Agency', 'App\Http\Controllers\AgencyController@index');
// post AddAgency
Route::post('Create', 'App\Http\Controllers\AgencyController@StoreAgency');



Auth::routes();

//Route::get('/home', [App\Http\Controllers\AgencyController::class, 'index'])->name('home');



Route::get('/Test',function(){
    return view('AuthentificationLayout');
});

Route::get('/Tours/All','App\Http\Controllers\TourController@AllTours');
Route::get('/Travlers/All','App\Http\Controllers\TravlerController@AllTravlers');
Route::get('/Travlers/All/{id}','App\Http\Controllers\TravlerController@AllTravlers')->where('id','[0-9]+');

// get AddAgency
//Route::get('AddNew', 'App\Http\Controllers\TourController@AddTour');
// post AddAgency
//Route::post('AddNew','App\Http\Controllers\TourController@StoreData');



Route::get('/Agency/Profile','App\Http\Controllers\AgencyController@Profile');
Route::post('/Agency/Profile','App\Http\Controllers\AgencyController@updateProfile');

/* Route::get('/Transportations/Create', 'App\Http\Controllers\MoyTransportController@Create');
Route::post('/Transportations/Store', 'App\Http\Controllers\MoyTransportController@Store'); */

//Route::get('/UpdateTransport/{id}', 'MoyTransportController@update');

Route::resource('Transportations', MoyTransportController::class);
Route::resource('Tours', TourController::class);

Route::resource('Paiement', PaimentController::class);

Route::get('/Availability', 'App\Http\Controllers\TourController@availability');
Route::get('/SearchByTitle', 'App\Http\Controllers\TourController@SearchByTitle');
Route::get('/SearchByAvail', 'App\Http\Controllers\TourController@SearchByAvail');



