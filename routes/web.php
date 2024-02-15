<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TrajectController;
use App\Models\Passenger;
use App\Models\Reservation;
use App\Models\Traject;
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
Route::resource('registerdr',DriverController::class);
Route::resource('traject',TrajectController::class);

Route::resource('reservation',ReservationController::class);

Route::get('/', function () {
    $trajects =Traject::with('driver')->get();
    return view('home',[
        'trajects'=> $trajects
    ]);
});
Route::get('/wel', function () {
    return view('welcome');
});
Route::get('/history', function () {
    $passenger = Passenger::where('user_id', Auth::user()->id)->first();
    $reservations =Reservation::where('passenger_id', $passenger->id)->get();
   
    return view('passenger.history',[
        'reservations'=> $reservations
    ]);
})->name('historyre');;


Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('roles')->group(function () {
    Route::get('/driver-dashboard', function () {
        return view('driver.dashboard');
    })->name('driver-dashboard');
});


require __DIR__.'/auth.php';