<?php

use App\Http\Controllers\userController;
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

Route::get('/', [userController::class,"login"]);
Route::get("/createUser",[]);
Route::post("/createUser",[]);
Route::get("/createAssignment",[]);
Route::post("/createAssignment",[]);
Route::get("/editAssignment/{id}",[]);
Route::put("/editAssignment",[]);
Route::delete("/deleteAssignment",[]);


