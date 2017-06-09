<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Utilisateur;
use Hash;
use Session;


class AuthController extends Controller
{
  public function login(){
      return view('auth/login');
  }

  public function check(){
      $mdp =  Request::input('motDePasse', '');
      $email =  Request::input('email', '');
      $user = Utilisateur::where("email", $email)->first();

      // Check user exists
      if (!isset($user)) {
          return 'login failed : Utilisateur incorrect !'.$mdp;
      }

      // Check password
      if (!Hash::check($mdp, $user->motDePasse)) {
          return 'login failed : mot de passe incorrect !'.$mdp.$user->motDePasse;
      }

      // Auth persistance
      Session::put('user_id', $user->id);
      return 'login successful';
  }

  public function logout(){
      Session::forget('user_id');
      return 'logout successful';
  }
}
