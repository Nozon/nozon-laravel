<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controller;
use App\Models\Presse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class PresseController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $presse = Presse::all();
        return view('presse/index')->with('presse', $presse);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('presse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        dd($request);
        echo("Dans la fonction store <br />");
        // Récupération du validateur de Presse
        $validate = Presse::getValidation($request);
        // En cas d'échec de validation
        if ($validate->fails()) {
            // Redirection vers le formulaire, avec inputs et erreurs
            // echo("Erreur validation");
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // En cas de succès de la validation
        try {
            echo("On entre dans le try <br />");
            // Tentative d'enregistrement de Presse
            Presse::createOne($validate->getData());
            // Message de succès, puis redirection vers la liste des Presses
            Message::success('presse.create');
            return redirect('presse');
        } catch (\Exception $e) {
            echo("Erreur bd");
            // En cas d'erreur, envoi d'un message d'erreur
            Message::error('bd.error');
            // return redirect()->back()->withInput();
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
        return view('pages.presse.edit')->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        echo ('je suis une train de mettre a jour la presse avec ID: '. $id);

      //Modifications de la publication

          $inputs = $request->only('url', 'titre', 'description', 'date');

          echo (implode(" | ", $inputs));

        $validate = Validator::make($inputs, Presse::$rules);

        if ($validate->fails()) {
            Message::error('presse.exists');
            echo ('validation ratée: '.$id);
            // Redirection vers le formulaire, avec inputs et erreurs
            // return redirect()->back()->withInput()->withErrors($validate);
             } else {
            $presse = Presse::find($id);
            $presse->url         = $inputs['url'];
            $presse->titre       = $inputs['titre'];
            $presse->description = $inputs['description'];
            $presse->date        = $inputs['date'];
            $presse->save();

            Message::success('presse.update');
            return ('La presse a bien été mise à jour');

            //Il faudra ajouter un mesage ici
            // redirect
            //Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('presse');
        }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $presse = Presse::find($id);
        $presse->delete();

        // redirect
        Message::success('presse.delete');
        return Redirect::to('presse');

    }

}
