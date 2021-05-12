<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiKeyValidation
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
        if ($request->input('api_key') !== config('app.api_key')) {
            return response()->json(array('message' => 'API Key is not valid'), 403);
        }

        return $next($request);
    }
}
