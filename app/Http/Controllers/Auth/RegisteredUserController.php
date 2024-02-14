<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Driver;
use App\Models\Passenger;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('driver.registerDr');
    }
    public function createpa(): View
    {
        return view('passenger.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image' => ['required'],

        ]);

        $attributes['image'] = request()->file('image')->store('public/uploads');

        $attributes['image'] = str_replace('public', 'storage', $attributes['image']);

        $user = User::create($attributes);
        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


    public function storeDriver(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
            'image' => ['required'],

        ]);

        $attributes['image'] = request()->file('image')->store('public/uploads');

        $attributes['image'] = str_replace('public', 'storage', $attributes['image']);

        $user = User::create($attributes);
        
        $driver = Driver::create([
            'user_id'=>$user->id,
            'type_ve' => $request->typeve,
            'num_pla' => $request->num_mat,
            'description' => $request->desc,
        ]);

        Auth::login($user);
        
        return redirect('/driver-dashboard');

    }
    public function storePassenger(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
            'image' => ['required'],

        ]);
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
             'image' => $fileName
        ]);
        
        $passenger = Passenger::create([
            'user_id'=>$user->id,
        ]);

        Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);

    }



}