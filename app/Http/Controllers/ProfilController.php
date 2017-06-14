<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controller;
use App\Models\Profil;
use App\Models\Equipe;
use App\Models\Membre;
use Illuminate\Http\Request;

class ProfilController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $profil = Profil::all();
        return view('profil/index')->with('profil', $profil);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('profil.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request, $equipe_id, $membre_id) {
        return "request : ".$request." equipe_id".$equipe_id." membre_id".$membre_id;
        $validate = Profil::getValidation($request, $membre_id, $equipe_id);

        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            echo ("validate failed");
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Profil
            Profil::createOne($validate->getData());
            // Message de succès, puis redirection vers la liste des profils
            Message::success('profil.saved');
            //return redirect('profil');
        } catch (\Exception $e) {
            // En cas d'erreur, envoi d'un message d'erreur
            //Message::error('bd.error');
            // Redirection vers le formulaire, avec inputs
            //return redirect()->back()->withInput();
            return "lol";
        }
    }

    public function addProfil($request, $equipe_id, $membre_id) {
      return "request : ".$request." equipe_id".$equipe_id." membre_id".$membre_id;
      $validate = Profil::getValidation($request, $membre_id, $equipe_id);

      if ($validate->fails()) {
          // Redirection vers le formulaire, avec inputs et erreurs
          echo ("validate failed");
          return redirect()->back()->withInput()->withErrors($validate);
      }
      // En cas de succès de la validation
      try {
          // Tentative d'enregistrement de Profil
          Profil::createOne($validate->getData());
          // Message de succès, puis redirection vers la liste des profils
          Message::success('profil.saved');
          //return redirect('profil');
      } catch (\Exception $e) {
          // En cas d'erreur, envoi d'un message d'erreur
          //Message::error('bd.error');
          // Redirection vers le formulaire, avec inputs
          //return redirect()->back()->withInput();
          return "lol";
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
