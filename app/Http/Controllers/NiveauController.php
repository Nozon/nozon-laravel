<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controller;
use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $niveau = Niveau::all();
        return view('niveau/index')->with('niveau', $niveau);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('niveau.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Récupération du validateur de Niveau
        $validate = Niveau::getValidation($request);
        // En cas d'échec de validation
        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Niveau
            Niveau::createOne($validate->getData());
            // Message de succès, puis redirection vers la liste des Niveaux
            Message::success('niveau.create');
            return redirect('niveau');
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