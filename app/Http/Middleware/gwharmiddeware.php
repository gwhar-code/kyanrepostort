<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class gwharmiddeware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->age<=200){
            return redirect('/trylayouts');
        }
        return $next($request);
    }
}
