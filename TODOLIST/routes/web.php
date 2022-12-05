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

Route::view('/',"home")->name("login.page");
Route::post("/login",[userController::class,"userLogin"])->name("login.user");
Route::get("/logado",[userController::class, "userLogado"])->name("home.logado");
Route::view("/createUser","createUser")->name("create.user");
Route::post("/createUser",[userController::class,"createUser"])->name("get.user");
Route::get("/createAssignment",[]);
Route::post("/createAssignment",[]);
Route::get("/editAssignment/{id}",[]);
Route::put("/editAssignment",[]);
Route::delete("/deleteAssignment",[]);


