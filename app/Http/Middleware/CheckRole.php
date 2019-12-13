<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(Auth::user()->role != 'Admin' || Auth::user()->role != 'admin'){
            return redirect('home')->with('error' , 'You are not authorised to access!');            
        }
        else{
            return $next($request);
        }
    }
}
