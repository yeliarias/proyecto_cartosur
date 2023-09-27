<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosCartosurController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/cartosur', function () {return view('cartosur.index');});
//Route::get('/cartosur/create', [DatosCartosurController::class, 'create']);

Route::resource('cartosur',DatosCartosurController::class);
