<?php

namespace App\Http\Controllers;

use Request;
use App\Utilisateur;
use Hash;
use Session;


class AuthController extends Controller
{
    public function login() {
        return view('auth/login');
    }

    public function check() {
      $motDePasse = Request::input('motDePasse', '');
      $email = Request::input('email', '');
      $user = Utilisateur::where("email", $email)->first();
      // Check user exists, dany
      if (!isset($user)) {
          return 'login failed, user existe pas';
      }
      // Check password, Hash permet le hash du mdp
      if (!Hash::check($motDePasse, $user->motDePasse)) {
          return 'login failed, mauvais password';
      }
      // Auth persistance,si user existant et bon mot de passe stock l’id du user dans session
      Session::put('user_id', $user->id);
      return 'login successful';
    }

    public function logout() {
        //Auth::logout();
        Session::flush();
        return redirect()->action('AuthController@login');
    }

    public function oAuth() {
      dd("oAtuth");
    }
}
