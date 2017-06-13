<?php
namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controllers;
use App\Models\Membre;
use App\Models\Profl;
use App\Models\Equipe;
use App\Models\Media;

use Illuminate\Http\Request;
use Illuminate\Facades\storage;

use Session;

class MembreController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $membre = Membre::all();
        return view('pages.membre.index')->with('membre', $membre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('pages.membre.create');
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
        echo "methode store ";
        // En cas d'échec de validation de Membre
        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            //return redirect()->back()->withInput()->withErrors($validate);
            return "validate failed";
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Membre
            $membre_id = Membre::createOne($validate->getData());

            $edition_annee = Session::get('edition_annee');
            //recup type equipe dans les inputs
            $type = $request->input('type_equipe');
            //recup de l'id de l'equipe
            $equipe_id = Equipe::where('edition_annee', $edition_annee)
                                ->where('type', $type)->first()->id;

            // Message de succès, puis redirection vers la liste des membres
            //Message::success('membre.saved');
            echo "J'essaye";

            //ProfilController::store($request, $equipe_id, $membre_id);
            return redirect()->action('ProfilController@store', ['request' => $request,
                                                'membre_id' => $membre_id,
                                              'equipe_id' => $equipe_id]);
            //return redirect('membre');
        } catch (\Exception $e) {
            // En cas d'erreur, envoi d'un message d'erreur
            Message::error('bd.error');
            // Redirection vers le formulaire, avec inputs
            //return redirect()->back()->withInput();
            return "bd failed";
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
