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
          Session::flash('flash_message',"Vous n'etes pas autentifié !");
          return redirect()->action('AuthController@login');
      }
      return $next($request);
    }
}
