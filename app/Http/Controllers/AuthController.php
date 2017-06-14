<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Hash;
use Session;
use App\Models\Utilisateur;


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
          return 'login failed : Utilisateur incorrect !';
      }

      // Check password
      if (!Hash::check($mdp, $user->motDePasse)) {
          // return redirect()->action('AuthController@login')->with('error', true);
          return 'login failed : mode de passe incorrect !'.$mdp;
      }

      // Auth persistance
      Session::put('user_id', $user->id);

      return redirect('/admin/2017');

  }

  public function logout() {
      Session::flush();
      return 'logout successful';
  }
}
