<?php

namespace App\Http\Controllers;

use App\Lib\Message;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Models\Edition;
use App\Models\Equipe;
use App\Models\Media;
use App\Models\Membre;
use App\Models\Presse;
use App\Models\Profil;
use App\Models\Publication;
use App\Models\Recompense;
use App\Models\Sponsor;

use Illuminate\Http\Request;

class EditionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($annee)
    {
        // Liste de toutes les éditions pour création dynamique du menu
        $editions = DB::table('editions')->orderBy('annee','desc')->get();

        // Récupération des informations de l'édition
        $edition = Edition::where('annee', $annee)->first();

        // Récupération de l'id de l'équipe principale de l'édition concernée
        $equipePrincipale = Equipe::where('edition_annee', $annee)->where('type', 'principal')->first();

        // Récupération de l'id de l'équipe secondaire de l'édition concernée
        $equipeSecondaire = Equipe::where('edition_annee', $annee)->where('type', 'secondaire')->first();


        // TESTS

        // On récupère un profil
        // $profil = Profil::where('id', 1)->first();
        // On l'affiche
        // echo($profil);
        // On récupère l'équipe d'après le profil
        // echo($profil->equipe_id);
        // echo(Equipe::where('id', $profil->equipe_id)->first());



        // Récupération des profils des membres de l'équipe principale
        $membresPrincipaux = Profil::all()->where('equipe_id', $equipePrincipale->id);

        // Récupération des profils des membres de l'équipe secondaire
        $membresSecondaires = Profil::all()->where('equipe_id', $equipeSecondaire->id);

        // Récupération des informations du concours
        $concours = $edition;

        // Récupération des publications a.k.a. news
        $news = Publication::all()->where('edition_annee', $annee);

        // Récupération des medias
        $medias = Media::all()->where('edition_annee', $annee);

        // Récupération des récompenses
        $recompenses = Recompense::all()->where('equipe_id', $equipePrincipale->id);

        // Récupération des presses
        $presses = Presse::all()->where('edition_annee', $annee);

        // Récupération des sponsors
        $edition_sponsors = edition_sponsorController::all()->where('edition_annee', $annee);
        $sponsorMain = Sponsor::where('valeur', 'principal')->first();

        $sponsorMain = Sponsor::all()->where('edition_annee', $annee);

        return view('pages.edition')
            ->with('editions', $editions)
            ->with('equipePrincipale', $equipePrincipale)
            ->with('equipeSecondaire', $equipePrincipale)
            ->with('membresPrincipaux', $membresPrincipaux)
            ->with('membresSecondaires', $membresSecondaires)
            ->with('concours', $concours)
            ->with('news', $news)
            ->with('medias', $medias)
            ->with('presses', $presses)
            ->with('sponsorMain', $sponsorMain)
            ->with('recompenses', $recompenses);

        // TESTS
        echo "Listes des éditions : ";
        foreach($editions as $edition) {
            echo $edition->annee . " ";
        }

        echo "<br />";
        echo("Equipe principale : " . $equipePrincipale->id. "<br />");

        echo("Equipe secondaire : " . $equipeSecondaire->id. "<br />");

        echo "Listes des membres de l'équipe principale :<br />";
        foreach($membresPrincipaux as $membreEqPrinc) {
            echo $membreEqPrinc . "<br />";
        }

        echo "Listes des membres de l'équipe secondaire :<br />";
        foreach($membresEqSec as $membreEqSec) {
            echo $membreEqSec . "<br />";
        }

        echo "Listes des récompenses : ";
        foreach($recompenses as $recompense) {
            echo $recompense->type . " ";
        }
        echo "<br />";

        echo "Listes des presses : ";
        foreach($presses as $presse) {
            echo $presse->titre . " ";
        }
        echo "<br />";
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
