<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BkkController;
use Carbon\Carbon;

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

Route::get('/', function () {
    $passed =  Carbon::now()->format('y') - "6" ;
    return view('welcome', compact('passed'));
});

Route::get('/login', function(){
return view('bkk.login');
});

Route::resource('bkk', BkkController::class);
