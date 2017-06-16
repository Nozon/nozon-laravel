<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controller;

use App\Models\Publication;
use App\Models\Media;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Intervention\Image\ImageManagerStatic as Image;

class PublicationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $publication = Publication::all();
        return view('pages.news.create')->with('publication', $publication);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($request->hasFile('imgNews')) {
          try {
            $recupImage = Image::make(Input::file('imgNews'));
            $imageUploadee = Media::upload($recupImage, "news");
          } catch (Exception $e) {
            Message::error('bd.error');
          }
        }
        // Récupération du validateur de Publication
        $validate = Publication::getValidation($request);
        // En cas d'échec de validation
        if ($validate->fails()) {
            return redirect()->back()->withInput()->with('error', 'Les paramètres entrés sont incorrects');

        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de Publication
            $publication = Publication::createOne($validate->getData());
            // Message de succès, puis redirection vers la liste des Publications
            $mediaALier = Media::createOne($imageUploadee->basename, $publication);

            // liaison avec les publications
            $mediaALier->publications()->attach($publication->id);

            // Conflits entre branche d'Antoine/Nicolas et branche dev
            /* Trucs d'Antoine commenté, trucs de dev suit (ligne avec le return) :
            Message::success('publication.create');
            return redirect('admin/');
            */
            return redirect()->back()->withInput()->with('info', 'Votre publication a bien été ajoutée');

        } catch (\Exception $e) {
            // En cas d'erreur, envoi d'un message d'erreur
            Message::error('bd.error');
            // Redirection vers le formulaire, avec inputs
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

        $inputs = $request->only('titre', 'texte', 'date');

        $validate = Validator::make($inputs, Publication::$rules);

        if ($validate->fails()) {
             return redirect()->back()->withInput()->with('error', 'Les paramètres entrés sont incorrects');

        } else {
            $publication = Publication::find($id);
            $publication->titre     = $inputs['titre'];
            $publication->texte     = $inputs['texte'];
            $publication->date      = $inputs['date'];
            $publication->save();

            return redirect()->back()->withInput()->with('info', 'Votre publication a bien été modifiée');

            return Redirect::to('admin/publication');
        }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $publication = Publication::find($id);
        $publication->delete();

        // redirect
        Message::success('publication.delete');
        return Redirect::to('publication');

    }

}
