<?php

namespace App\Http\Middleware;

use Closure;

class ValidateUserAgent
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
        var_dump($request);
        
        return $next($request);
    }
}
