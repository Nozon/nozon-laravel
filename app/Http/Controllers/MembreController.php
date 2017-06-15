<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controllers;
use App\Models\Edition;
use App\Models\Membre;
use App\Models\Profil;
use App\Models\Equipe;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Facades\storage;
use Illuminate\Support\Facades\Input;

use Session;

use Intervention\Image\ImageManagerStatic as Image;

class MembreController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($annee) {

        // Récupération des informations de l'édition
        $edition = Edition::where('annee', $annee)->first();

        // Récupération de l'id de l'équipe principale de l'édition concernée
        $equipePrincipale = Equipe::where('edition_annee', $annee)->where('type', 'principal')->first();

        $membresPrincipaux = Profil::all()->where('equipe_id', $equipePrincipale->id);

        // dd($membresPrincipaux);

        return view('pages.team.create')->with('membres', $membresPrincipaux);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('pages.team.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      if ($request->hasFile('imgMembre')) {
        try {
          $recupImage = Image::make(Input::file('imgMembre'));
          $imageUploadee = Media::upload($recupImage, "profils");

        }
        catch (Exception $e) {
          return "echec de l'upload";
        }
      }

      $validate = Membre::getValidation($request);

      if ($validate->fails()) {
          // Redirection vers le formulaire, avec inputs et erreurs
          // return redirect()->back()->withInput()->withErrors($validate);
        return redirect()->back()->withInput()->with('error', 'Les paramètres entrés sont incorrects');

      }

      try {
          // Tentative d'enregistrement de Membre
          $membre_id = Membre::createOne($validate->getData())->id;
          $edition_annee = Session::get('edition_annee');
          //recup type equipe dans les inputs
          dd($request);
          $type = $request->input('type_equipe');
          //recup de l'id de l'equipe
          $equipe_id = Equipe::where('edition_annee', $edition_annee)
              ->where('type', $type)->first()->id;
          // Message de succès, puis redirection vers la liste des membres
          //Message::success('membre.saved');
          // return "request: ".$request." membre id : ".$membre->id." Equipe ID :".$equipe_id;
          // return redirect()->action('ProfilController@store',
          //                             ['request' => $request,
          //                             'membre_id' => $membre->id,
          //                             'equipe_id' => $equipe_id]);


          $profilcree = Self::createProfil($request, $membre_id, $equipe_id);
      } catch (\Exception $e) {
          // En cas d'erreur, envoi d'un message d'erreur
          Message::error('bd.error');
          // Redirection vers le formulaire, avec inputs
          // return redirect()->back()->withInput();
          return "bd failed";
      }
    }
    public function createProfil($request, $membre_id, $equipe_id) {
        $validate = Profil::getValidation($request, $membre_id, $equipe_id);
        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            return redirect()->back()->withInput()->with('error', 'Les paramètres entrés sont incorrects');
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Profil
            echo ("j'essaye de créer le profil : ".implode(" | ",$validate->getData()));
            return Profil::createOne($validate->getData(), $membre_id, $equipe_id);
            // Message de succès, puis redirection vers la liste des profils
 //Revoir la redirection           
            return redirect()->with('success', 'Un nouveau membre a été ajouté');
            //return redirect('profil');
        } catch (\Exception $e) {
            // En cas d'erreur, envoi d'un message d'erreur
            //Message::error('bd.error');
            // Redirection vers le formulaire, avec inputs
            return redirect()->back()->withInput()->with('error', 'Toutes nos excuses. Problème de connexion avec la base de donnée');
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
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $inputs = $request->only('nom', 'prenom', 'email');

        $validate = Validator::make($inputs, Membre::$rules);

        if ($validate->fails()) {

            return redirect()->back()->withInput()->with('error', 'Les paramètres entrés sont incorrects');
        } else {
            $membre = Membre::find($id);
            $membre->nom      = $inputs['nom'];
            $membre->prenom   = $inputs['prenom'];
            $membre->email    = $inputs['email'];
            $membre->save();


            return Redirect::to('admin/membre');
        }
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
