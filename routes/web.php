<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/table', function () {
    return view('table');
});

use App\Http\Controllers\MyProfileController;

Route::get("/myprofile/create", [MyProfileController::class, "create"]);

Route::get("/myprofile/{id}/edit", [MyProfileController::class, "edit"]);

Route::get("/myprofile/{id}", [MyProfileController::class, "show"]);

Route::get("/newgallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://amp.insider.com/images/5b7acee73cccd122008b45ac-750-563.jpg";
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

    return view("newgallery/ant", compact("ant", "bird", "cat", "god", "spider"));
});
Route::get("/newgallery", [MyProfileController::class, "newgallery"]);

Route::get("/newgallery/ant", [MyProfileController::class, "ant"]);

use App\Http\Controllers\Covid19Controller;

Route::get("/coronavirus", [MyProfileController::class, "coronavirus"]);

Route::get("/covid19/create", [Covid19Controller::class, "create"]);

Route::get("/covid19/{id}/edit", [Covid19Controller::class, "edit"]);

Route::get('/covid19', [Covid19Controller::class, "index"]);

Route::get('/covid19/{id}', [Covid19Controller::class, 'show']);

Route::post("/covid19", [Covid19Controller::class, "store"]);

Route::patch("/covid19/{id}", [Covid19Controller::class, "update"]);

Route::delete('/covid19/{id}', [Covid19Controller::class, 'destroy']);

use App\Http\Controllers\StaffController;


Route::get('/staff', [StaffController::class, 'index']);

Route::get("/staff/create", [StaffController::class, "create"]);

Route::get('/staff/{id}', [StaffController::class, 'show']);

Route::get("/staff/{id}/edit", [StaffController::class, "edit"]);

Route::post("/staff", [StaffController::class, "store"]);

Route::patch("/staff/{id}", [StaffController::class, "update"]);

Route::delete('/staff/{id}', [StaffController::class, 'destroy']);
