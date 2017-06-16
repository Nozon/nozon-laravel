<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;

class MediaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $media = Media::all();
        return view('pages.media.create')->with('media', $media);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        $recupFichierImage = Image::make(Input::file('image'));
        try {
          Media::upload($recupFichierImage, "galerie");
          return "l'image a pu être créée ! ";
        } catch (Exception $e) {

          return "l'image n'a pas pu etre créée";
        }



        // Image::make($file->getRealPath())->resize('200','200')->save($filename);

        // // resize image
        // $img->fit(300, 200);
        // // save image
        // $img->save('bar.jpg');




        // // Récupération du validateur de Media
        // $validate = Media::getValidation($request);
        // // En cas d'échec de validation
        // if ($validate->fails()) {
        //     // Redirection vers le formulaire, avec inputs et erreurs
        //     return redirect()->back()->withInput()->withErrors($validate);
        // }
        // // En cas de succès de la validation
        // try {
        //     // Tentative d'enregistrement de Media
        //     Media::createOne($validate->getData());
        //     // Message de succès, puis redirection vers la liste des Medias
        //     Message::success('media.create');
        //     return redirect('media');
        // } catch (\Exception $e) {
        //     // En cas d'erreur, envoi d'un message d'erreur
        //     Message::error('bd.error');
        //     // Redirection vers le formulaire, avec inputs
        //     return redirect()->back()->withInput();
        // }
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

        $media = Media::find($id);
        $media->delete();

        // redirect
        Message::success('media.delete');
        return Redirect::to('media');
    }

}
