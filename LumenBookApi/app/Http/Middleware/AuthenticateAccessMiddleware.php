<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AuthenticateAccessMiddleware
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
        // explode then check for the token if  token exists proceed or else abort
        $validSecrets = explode(',', env('ACCEPTED_SECRETS'));
        if(in_array($request->header('Authorization'), $validSecrets))
        {
            return $next($request);
        }

        abort(Response::HTTP_UNAUTHORIZED);
    }
}
