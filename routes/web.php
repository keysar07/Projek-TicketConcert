<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Services\TicketServiceController;
use App\Http\Controllers\Services\UserServiceController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index']);

Auth::routes();

Route::group([
    'prefix' => 'dashboard',
], function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->middleware('auth')
        ->name('home');
});

Route::group([
    'prefix' => 'Ticket',
], function () {
    Route::get('/', [TicketController::class, 'index'])
        ->middleware('auth')
        ->name('ticket');
    Route::group([
        'prefix' => 'Action'
    ], function () {
        Route::get('/create', [TicketController::class, 'create'])
            ->middleware('auth')
            ->name('ticket-create');
        Route::get('/update/{ticket:nama_ticket}', [TicketController::class, 'edit'])
            ->middleware('auth')
            ->name('ticket-update');
        Route::get('/detail/{ticket:id}', [TicketController::class, 'detail'])
            ->middleware('auth')
            ->name('ticket-detail');
    });
});

Route::group([
    'prefix' => 'User',
], function () {
    Route::get('/', [UserController::class, 'index'])
        ->middleware('auth')
        ->name('user');
    Route::group([
        'prefix' => 'Action'
    ], function () {
        Route::get('/create', [UserController::class, 'create'])
            ->middleware('auth')
            ->name('user-create');
        Route::get('/update/{user:name}', [UserController::class, 'edit'])
            ->middleware('auth')
            ->name('user-update');
        Route::get('/detail/{user:id}', [UserController::class, 'detail'])
            ->middleware('auth')
            ->name('user-detail');
    });
});


// Service
Route::group([
    'prefix' => 'Service-Ticket'
], function () {
    route::post('/insert', [TicketServiceController::class, 'store'])
        ->name('ticket-service-insert');
    route::put('/update/{ticket:id}', [TicketServiceController::class, 'update'])
        ->name('ticket-service-update');
    route::delete('/delete/{ticket:id}', [TicketServiceController::class, 'destroy'])
        ->name('ticket-service-destroy');
});

Route::group([
    'prefix' => 'Service-User'
], function () {
    route::post('/insert', [UserServiceController::class, 'store'])
        ->name('user-service-insert');
    route::put('/update/{user:id}', [UserServiceController::class, 'update'])
        ->name('user-service-update');
    route::delete('/delete/{user:id}', [UserServiceController::class, 'destroy'])
        ->name('user-service-destroy');
});
