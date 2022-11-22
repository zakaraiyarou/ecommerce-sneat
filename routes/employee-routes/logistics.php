<?php

use App\Http\Livewire\Logistics\LogisticsAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('/logistics-admin')->group(function () {
    Route::get('/dashboard', [LogisticsAdmin::class, 'render'])->name('logistics-admin-dashboard');

});
Route::prefix('/logistics')->group(function () {
    Route::get(
        '/dashboard',
        function ($id) {

        }
    );
});
Route::prefix('/project-management')->group(function () {
Route::get(
    '/dashboard',
    function ($id) {

    }
);
});

