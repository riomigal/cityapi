<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiKeyValidation
{
    /**
     * Handle an incoming request check if user with api key exists
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = Http::get(config('app.front_url'), [
            'api_key' => $request->get('api_key')
        ]);

        if ($response->json()['statusCode'] !== 200) {
            return response()->json($response->json());
        }

        return $next($request);
    }
}