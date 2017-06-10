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
      if (!Auth::check()) {
          Session::put('oldUrl', $request->fullUrl());
          echo "passé par MyAuth !";
          return redirect()->action('AuthController@login');
      }
      return $next($request);
    }
}
