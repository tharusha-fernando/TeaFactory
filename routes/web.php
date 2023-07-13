<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function(){
    

    Route::group(['middleware' => ['auth', 'role:supervisor']], function () {
        Route::get('/supervisor-dashboard', [DashBoardController::class, 'supervisorDash'])->name('supervisorDash');

    });


    Route::group(['middleware' => ['auth', 'role:factory_operator']], function () {
        Route::get('/factory-operator-dashboard', [DashBoardController::class, 'factoryoperatorDasg'])->name('factoryoperatorDasg');
        
    });

    Route::group(['middleware' => ['auth', 'role:truck_operator']], function () {
        Route::get('/truck-operator-dashboard', [DashBoardController::class, 'truckoperatorDash'])->name('truckoperatorDash');

    });


    Route::group(['middleware' => ['auth', 'role:labour']], function () {
        Route::get('/labour-dashboard', [DashBoardController::class, 'labourDash'])->name('labourDash');

    });


    Route::group(['middleware' => ['auth', 'role:superadministrator']], function () {
        Route::get('/superadministrator-dashboard', [DashBoardController::class, 'superadministratorDash'])->name('superadministratorDash');

    });


    Route::group(['middleware' => ['auth', 'role:administrator']], function () {
        Route::get('/administrator-dashboard', [DashBoardController::class, 'administratorDash'])->name('administratorDash');

    });


});
