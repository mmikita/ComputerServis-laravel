<?php

namespace App\Http\Middleware;

use Closure;

class Employee
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
        if ($request->user() && $request->user()->role != 'employee')
        {
            return redirect('');
        }
        return $next($request);
    }
}
}
