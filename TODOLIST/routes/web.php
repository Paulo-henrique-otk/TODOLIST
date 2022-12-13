<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\taskController;
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

<<<<<<< HEAD
Route::view('/',"home")->name("login.page");
Route::post("/login",[userController::class,"userLogin"])->name("login.user");
Route::get("/logado",[userController::class, "userLogado"])->name("home.logado");
Route::view("/createUser","createUser")->name("create.user");
Route::post("/createUser",[userController::class,"createUser"])->name("get.user");
Route::view("/tasks","tasks", ['tasks' => taskController::getTasks()])->name("tasks.user");
Route::post("/createTask",[taskController::class,"createTask"])->name("post.task");
Route::patch("/editTask/{taskId}",[taskController::class,"editTask"])->name("patch.task");
Route::delete("/deleteTask/{taskId}",[taskController::class,"deleteTask"])->name("delete.task");

Route::get("/createAssignment",[]);
Route::post("/createAssignment",[]);
Route::get("/editAssignment/{id}",[]);
Route::put("/editAssignment",[]);
Route::delete("/deleteAssignment",[]);
=======
    Route::view('/',"home")->name("login.page");
    Route::post("/login",[userController::class,"userLogin"])->name("login.user");
    Route::view("/createUser","createUser")->name("create.user");
    Route::post("/createUser",[userController::class,"createUser"])->name("get.user");
    Route::get("/tasks", [ taskController::class, "getTasks"])->name("tasks.user");
    Route::post("/createTask",[taskController::class,"createTask"])->name("post.task");
    Route::patch("/editTask/{taskId}",[taskController::class,"editTask"])->name("patch.task");



>>>>>>> 32e379e (Criado a autenticaçao de tarefas de um usuário)


