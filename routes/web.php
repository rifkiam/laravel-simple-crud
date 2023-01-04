<?php

use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home Page",
//     ]);
// });

Route::get('/', [WargaController::class, 'index']);

Route::get('/add', function () {
    return view('add', [
        "title" => "Add Data"
    ]);
});

Route::post('/addData', [WargaController::class, 'add']);
Route::get('/updateData/{id}', [WargaController::class, 'updateView']);
Route::put('/updateData/{id}', [WargaController::class, 'updateData']);
Route::delete('/deleteData/{id}', [WargaController::class, 'deleteData']);

Route::get('/detail/{id}', [WargaController::class, 'detailView']);
