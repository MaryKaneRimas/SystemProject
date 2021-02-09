<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SystemController;

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



/*Route::get('home',[HomeController::class,'home']);

Route::get('/Generics',[HomeController::class,'Generics']);

Route::get('/Elements',[HomeController::class,'Elements']);

Route::post('/R',[SystemController::class,'insertData']);*/


Route::get('L',[SystemController::class,'L']);
Route::get('H',[SystemController::class,'H']);
Route::get('P',[SystemController::class,'P']);
Route::get('I',[SystemController::class,'I']);
Route::get('/R',[SystemController::class,'insertDataR']);
Route::post('/L',[SystemController::class,'insertData']);



/*Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');

});


Route::get('/login', function () {
    return view('login');
});

Route::get('/AteanaLogin', function () {
    return view('AteanaLogin');
});

Route::get('/AteanaOrder', function () {
    return view('AteanaOrder');
});


Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/contact', function () {
    return view('contact');
});





Route::get('/L', function () {
    return view('L');
});


Route::get('/R', function () {
    return view('R');
});

Route::get('/H', function () {
    return view('H');
});

Route::get('/P', function () {
    return view('P');
});

Route::get('/I', function () {
    return view('I');
});

Route::get('/U', function () {
    return view('U');
});


*/

