<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Check
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
        if(Auth::check())
            return redirect('home');
        return redirect('trangchu')
    }
}
