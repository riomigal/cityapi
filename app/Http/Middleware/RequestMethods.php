<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequestMethods
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

        if(request()->method() != 'GET') {
            return response()->json(array('message' => 'Only GET requests allowed'), 400);
        }

        return $next($request);
    }
}
