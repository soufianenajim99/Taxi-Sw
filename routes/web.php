<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TrajectController;
use App\Models\Driver;
use App\Models\Favorite;
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
Route::resource('favorite', FavoriteController::class);

Route::get('/', function () {
    $trajects =Traject::with('driver');
    if(request('search')){
        $trajects
           ->where('depart','LIKE','%'.request('search').'%')
           ->orWhere('arrivee','LIKE','%'.request('search').'%');

      }
    return view('home',[
        'trajects'=> $trajects->get()
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
})->name('historyre');

Route::get('/favoris/{id}', function ($id) {

    $reservation = Reservation::findOrFail($id);
        $reservation->favorite = 1; // Set favorite attribute to 1
        $reservation->save();
        
    $reservation = Reservation::where('favorite', 1)->get();
    return view('passenger.favorites',[
        'reservations'=> $reservation
    ]);
});




Route::get('/confirme/{id}', function ($id) {

    $reservation = Reservation::findOrFail($id);
        $reservation->status = 1; // Set status attribute to 1(complete)
        $reservation->save();
    return view('passenger.rating',[
        'reservation'=> $reservation
    ]);
});





Route::get('/favorites', function () {
    $reservation = Reservation::where('favorite', 1)->get();
    return view('passenger.favorites',[
        'reservations'=> $reservation
    ]);
})->name('fvrs');







Route::get('/history_dr', function () {
    $driver = Driver::where('user_id', Auth::user()->id)->first();
    $reservations =Reservation::where('driver_id', $driver->id)->get();
   
    return view('driver.history_trajects',[
        'reservations'=> $reservations
    ]);
})->name('historydr');

Route::get('/settings', function () {
    $driver = Driver::where('user_id', Auth::user()->id)->first();
   
    return view('driver.settings',[
        'driver'=> $driver
    ]);
})->name('settings');





Route::get('/dashboard', function () {

    $driver = Driver::where('user_id', Auth::user()->id)->first();
    $trajects =Traject::where('driver_id', $driver->id)->get();
   

    
    return view('/driver.dashboard',[
        'trajects'=> $trajects
    ]);
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