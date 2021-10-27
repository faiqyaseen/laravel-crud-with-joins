<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentControllerController;

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
    return view('index');
});


Route::view('add-teacher','add-teacher');
Route::post('add-teacher',[TeacherController::class,'add']);
Route::get('teachers',[TeacherController::class,'tlist']);
Route::get('update-teacher/{id}',[TeacherController::class,'for_update']);
Route::post('update-teacher',[TeacherController::class,'update']);
Route::get('delete-teacher/{id}',[TeacherController::class,'delete']);

Route::get('add-student',[StudentController::class,'for_add']);
Route::post('add-student',[StudentController::class,'add']);
Route::get('students',[StudentController::class,'slist']);
Route::get('update-student/{id}',[StudentController::class,'for_update']);
Route::post('update-student',[StudentController::class,'update']);
Route::get('delete-student/{id}',[StudentController::class,'delete']);
