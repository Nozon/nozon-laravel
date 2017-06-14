<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controller;
use App\Models\edition_sponsor;
use Illuminate\Http\Request;

class edition_sponsorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $edition_sponsor = Edition_Sponsor::all();
        return view('edition_sponsor/index')->with('edition_sponsor', $edition_sponsor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('edition_sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Récupération du validateur de Edition_Sponsor
        $validate = Edition_Sponsor::getValidation($request);
        // En cas d'échec de validation
        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Edition_Sponsor
            Edition_Sponsor::createOne($validate->getData());
            // Message de succès, puis redirection vers la liste des Edition_sponsor
            Message::success('edition_sponsor.create');
            return redirect('edition_sponsor');
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
        
        $edition_sponsor = Edition_sponsor::find($id);
        $edition_sponsor->delete();

        // redirect
        Message::success('edition_sponsor.delete');
        return Redirect::to('edition_sponsor');
        
    }

}