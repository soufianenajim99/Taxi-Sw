<?php

namespace App\Http\Middleware;

use App\Models\Passenger;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class PassengerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (auth::check() && Passenger::where('user_id', Auth::user()->id)->exists()) {
            return $next($request);
        } else {
            return redirect()->route("login");
        }
       
    }
}