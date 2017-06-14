<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class MyAuth
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
      $userId = Session::get('user_id');

      	// Si la variable n’est pas set, alors l’accès est refusé
            if (!isset($userId)) {
            	return response('Unauthorised', 403);
            }
      	// Sinon on laisse passer
      	return $next($request);

    }
}
