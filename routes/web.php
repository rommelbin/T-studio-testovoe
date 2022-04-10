<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => "student"], function () {
    Route::post("/add", [StudentController::class, "create"]);
    Route::put("/update/{id}", [StudentController::class, "update"]);
    Route::delete("/delete/{id}", [StudentController::class, "delete"]);
    Route::get("/get/{id?}", [StudentController::class, "get"]);
});

Route::group(["prefix" => 'group'], function () {
    Route::post("/add", [StudentGroupController::class, "create"]);
    Route::put("/update/{id}", [StudentGroupController::class, "update"]);
    Route::delete("/delete/{id}", [StudentGroupController::class, "delete"]);
    Route::get("/get/{id?}", [StudentGroupController::class, "get"]);
});
Route::group(["prefix" => 'course'], function () {
    Route::post("/add", [CourseController::class, "create"]);
    Route::put("/update/{id}", [CourseController::class, "update"]);
    Route::delete("/delete/{id}", [CourseController::class, "delete"]);
    Route::get("/get/{id?}", [CourseController::class, "get"]);
});

Route::group(["prefix" => 'teacher'], function () {
    Route::post("/add", [TeacherController::class, "create"]);
    Route::put("/update/{id}", [TeacherController::class, "update"]);
    Route::delete("/delete/{id}", [TeacherController::class, "delete"]);
    Route::get("/get/{id?}", [TeacherController::class, "get"]);
});
