<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Hash;
use Session;
use App\Models\Utilisateur;
use App\Lib\Message;


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
          return redirect()->back()->with('message', 'Adresse mail ou mot de passe incorrect');
           //Message::error('auth.success');
         // return redirect()->back()->withInput();
      }

      // Check password
      if (!Hash::check($mdp, $user->motDePasse)) {
        return redirect()->back()->with('message', 'Adresse mail ou mot de passe incorrect'); 
       
      }

      // Auth persistance
      Session::put('user_id', $user->id);
      return redirect('/admin/2017')->with('message', 'Vous êtes bien connecté'); 

        

      
  }

  public function logout() {
      Session::flush();
      return redirect('/');
  }
}
