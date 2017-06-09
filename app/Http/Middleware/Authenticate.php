<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
     {
           	// On récupère la variable de session ‘user_id’
           	$userId = Session::get('utilisateur_id');

     	      // Si la variable n’est pas set, alors l’accès est refusé
           	if (!isset($userId)) {
           		return response('Acces refusé ! Erreur : ', 403);
            }
     	// Sinon on laisse passer
           	return $next($request);
     }
}
