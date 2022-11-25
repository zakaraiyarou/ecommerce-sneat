<?php
use App\Http\Controllers\Redirect\userController;
use App\Http\Livewire\Settings\UserInfo;
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

//redirecting routes //all user can use this routes as long as they are login
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
        Route::resource('/userinfo', UserInfo::class)
            ->except(['destroy' , 'create']);
        Route::get('/account', function ($id) {

        });
        Route::get('/', function () {
            return redirect()->route('userinfo.show',['userinfo' =>  Auth::user()->id]);
        })->name('settings');
    });
});

//public routes
