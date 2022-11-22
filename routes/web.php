<?php

use App\Http\Controllers\Applicant\ApplicantController;
use App\Http\Controllers\icons\Boxicons;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Analytics;
use App\Http\Controllers\RecruiterController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // include('web-routes/hr-routes.php');

})->domain('www.'.env('SESSION_DOMAIN'));

// Route::domain('employee.'.env('APP_URL'))->group(function () {
//     Route::get('/yeah', function () {
//         //
//         return 'yeah boui';
//     });
// });
