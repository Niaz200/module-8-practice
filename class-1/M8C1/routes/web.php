<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get("person/{name?}", [PersonController::class, "getPerson"]);
Route::get("person/{name?}", [PersonController::class, "getPerson"])->whereAlpha("name");

// Route::get("person/{name?}", [PersonController::class, "getPerson"])->whereAlphaNumeric("name");

// Route::get("personid/{id?}", [PersonController::class, "getPersonById"]);
Route::get("personid/{id?}", [PersonController::class, "getPersonById"])->whereNumber("id");


//multiple parameter
Route::get("person/{name}/account/{accountId}", [PersonController::class, "personAccount"])->whereAlpha("name")->whereNumber("accountId");

Route::get("/persons",[PersonController::class, "personForm"]);
Route::post("/persons",[PersonController::class, "createAperson"]);

// Route::post("/api/persons",[ApiController::class, "createAperson"]);