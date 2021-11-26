<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StagiairesController;
use App\Http\Controllers\StagiairesDemandeController;
use App\Http\Controllers\StagiairesR_Controller;
use App\Http\Controllers\StagiairesFController;

use App\Http\Controllers\ApprentisController;
use App\Http\Controllers\ApprentisDemandeController;
use App\Http\Controllers\ApprentisRController;
use App\Http\Controllers\ApprentisFController;

use App\Http\Controllers\AgentsController;
use App\Http\Controllers\homeController;

use App\Http\Controllers\medecinHomeController;
use App\Http\Controllers\AgentDirectionHomeController;
use App\Http\Controllers\PaieController;


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
Auth::routes();
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/s/gerercompt/as', [homeController::class,'indexSGas']);
Route::get('/s/gerercompt/m', [homeController::class,'indexSGm']);




Route::resource('/ag', AgentsController::class);

Route::group(['middleware'=>'auth'],function(){

    Route::get('/redirects', [homeController::class,'index']);

    Route::group(['middleware'=>'agentService'],function(){

        Route::group(['middleware'=>'superviseur'],function(){
            Route::get('/s/home', [homeController::class,'indexS']);
            //Route::get('/s/gerercompt/as', [homeController::class,'indexSGas']);
            Route::get('/s/gerercompt/ad', [homeController::class,'indexSGad']);
           // Route::get('/s/gerercompt/m', [homeController::class,'indexSGm']);
        });
             /* stagiaire*/
        Route::resource('/stc', StagiairesDemandeController::class);
        Route::resource('/str', StagiairesR_Controller::class);
        Route::resource('/st', StagiairesController::class);
        Route::resource('/stf', StagiairesFController::class);
        
             /* apprenti*/
        Route::resource('/apc', ApprentisDemandeController::class);
        Route::resource('/apr', ApprentisRController::class);
        Route::resource('/ap', ApprentisController::class);
        Route::resource('/apf', ApprentisFController::class);


        Route::resource('/paie', PaieController::class);

        Route::get('/as/home', [homeController::class,'indexAs']);

       Route::get('/regist', [homeController::class,'regist']);
      // Route::get('/attestation', [homeController::class,'attestation']);

       Route::get('/recherche', [homeController::class,'searshe']);

    });
    Route::group(['middleware'=>'agentDirection'],function(){

        Route::resource('/agd', AgentDirectionHomeController::class);


    });
    Route::group(['middleware'=>'medecin',],function(){
        Route::resource('/med', medecinHomeController::class);

    });
});