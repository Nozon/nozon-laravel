<?php

namespace App\Http\Controllers;

use App\Lib\Message;

use App\Http\Controllers\Controller;

use App\Models\Edition;
use App\Models\Presse;
use App\Models\Recompense;

use Illuminate\Http\Request;

class EditionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($annee)
    {
        $recompenses = Recompense::all()->where('equipe_id', '1');
        $presses = Presse::all()->where('edition_annee', $annee);
        return    mview('pages.edition')
                ->with('presses', $presses)
                ->with('recompenses', $recompenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('edition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Récupération du validateur de Edition
        $validate = Edition::getValidation($request);
        // En cas d'échec de validation
        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Edition
            Edition::createOne($validate->getData());
            // Message de succès, puis redirection vers la liste des edition
            Message::success('edition.create');
            return redirect('edition');
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

        $inputs = $request->only('annee', 'textePresentation', 'lieu', 'dateConcours', 'texteConcours');

        $validate = Validator::make($inputs, Edition::$rules);

        if ($validate->fails()) {
            Message::error('edition.exists'); // "Edition n'existe pas" (à voir la formulation) plutot que "presse.exists", non?
            // Redirection vers le formulaire, avec inputs et erreurs
            return redirect()->back()->withInput()->withErrors($validate);
        } else {
            $edition = Edition::find($id);
            $edition->annee               = $inputs['annee'];
            $edition->textePresentation   = $inputs['textePresentation'];
            $edition->lieu                = $inputs['lieu'];
            $edition->dateConcours        = $inputs['dateConcours'];
            $edition->texteConcours       = $inputs['texteConcours'];
            $edition->save();

            Message::success('edition.update');

            return Redirect::to('admin/edition');
        }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        $edition = Edition::find($id);
        $edition->delete();

        // redirect
        Message::success('edition.delete');
        return Redirect::to('edition');
        
    }
}
