<?php
use App\Patient;
use App\Http\Controllers\PatientController;

// use Symfony\Component\Routing\Route;
// use Symfony\Component\Routing\Annotation\Route;

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
Route::get('/','PatientController@index');

Route::prefix('/')->middleware('auth')->group(function () {
    Route::resource('patient','PatientController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
