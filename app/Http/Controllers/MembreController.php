<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controller;
use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $membre = Membre::all();
        return view('membre/index')->with('membre', $membre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('membre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Récupération du validateur
        $validate = Membre::getValidation($request);
        // En cas d'échec de validation de Membre
        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Membre
            Membre::createOne($validate->getData());
            // Message de succès, puis redirection vers la liste des membres
            Message::success('membre.create');
            return redirect('membre');
        } catch (\Exception $e) {
            // En cas d'erreur, envoi d'un message d'erreur
            Message::error('bd.error');
            // Redirection vers le formulaire, avec inputs
            return redirect()->back()->withInput();
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
        
           //Modifications de la publication
         $rules = array(
        'nom'       => 'required', 'string',
        'prenom'    => 'required', 'string',
        'email'     => 'required', 'string'
    );
        $validator = Validator::make(Input::all(), $rules);

        
        if ($validate->fails()) {
            Message::error('membre.exists');
            // Redirection vers le formulaire, avec inputs et erreurs
            return redirect()->back()->withInput()->withErrors($validate);
             }
        else {
            // store
            $membre = Mebre::find($id);
            $membre->nom        = Input::get('nom');
            $membre->prenom     = Input::get('prenom');
            $membre->email      = Input::get('email');
            $membre->save();
            
            Message::success('membre.update');
            
            
            //Il faudra ajouter un mesage ici
            // redirect
            //Session::flash('message', 'Successfully updated nerd!');
            //return Redirect::to('presse');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        $membre = Membre::find($id);
        $membre->delete();

        // redirect
        Message::success('membre.delete');
        return Redirect::to('membre');
        
    }

}