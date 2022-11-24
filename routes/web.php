<?php

use App\Http\Controllers\Applicant\ApplicantController;
use App\Http\Controllers\icons\Boxicons;
use App\Http\Controllers\Redirect\userController;
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

//employee routes
Route::domain('employee.' . env('SESSION_DOMAIN'))
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])
    ->group(function () {
        require_once "employee-routes/logistics.php";
    });

//core routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])
    ->domain('www.' . env('SESSION_DOMAIN'))
    ->group(function () {
        Route::get(
            '/dashboard',
            function () {
                    return view('dashboard');
                }
        )->name('dashboard');

    });

//redirecting routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return redirect()->route('redirect-user');
    });
    Route::get('/redirect/user', [userController::class, 'index'])->name('redirect-user');
    Route::prefix('/settings')->group(function () {
        Route::resource('/user', UserController::class);
    });
    Route::get('/settings/profile', [userController::class, 'index'])->name('redirect-user');
});

//public routes
