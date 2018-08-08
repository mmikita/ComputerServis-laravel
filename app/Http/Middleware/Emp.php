<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class Emp
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
        if 
         ($request->user() && ($request->user()->role != 'employee'))
        {
            return redirect('');
        }
        return $next($request);
    }
}

