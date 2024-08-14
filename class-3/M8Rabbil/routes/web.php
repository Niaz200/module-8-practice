<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// 1. String Int Null boolean Response
Route::get('/Demo1', [DemoController::class,'Demo1']);


// 2. Array & Associative Array Response 
Route::get('/Demo2', [DemoController::class,'Demo2']);

// 3. Json Response 
Route::get('/Demo3', [DemoController::class,'Demo3']);

// 4. Response with data, msg, code
Route::get('/Demo4', [DemoController::class,'Demo4']);

// 5. Response redirect
Route::get('/Demo5', [DemoController::class,'Demo5']);

// 6. Binary File Response
Route::get('/Demo6', [DemoController::class,'Demo6']);

 // 7. File Download Response
Route::get('/Demo7', [DemoController::class,'Demo7']);

  // 8. Response Cookies

  Route::get('/Demo8', [DemoController::class,'Demo8']);

// 9. Response with Header properties

Route::get('/Demo9', [DemoController::class,'Demo9']);

// 10. Response Blade view

Route::get('/Demo10', [DemoController::class,'Demo10']);