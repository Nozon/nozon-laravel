<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Media extends Model
{

    public static $rulesImage = [
        'image' => 'required | mimes:jpeg,jpg,png | max:1000',
    ];

    public static function getValidationPhoto(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('image');

        // Création du validateur
        $validator = Validator::make($inputs, Media::$rulesImage);
        // Si l'image n'est pas du bon format ou n'est pas de la bonne taille,
        //le validator renvoie une erreur
        if ($validator->fails) {
          $validator->errors()->add('format','medias.format'));
        }

        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Media
            if (Media::exists($inputs['url'])) {
                $validator->errors()->add('exists', Message::get('media.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($url)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cette url
        return Media::where('url', $url)->first() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Presse selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Media
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Media();
        // Définition des propriétés de Media
        $new->url = $values['url'];
        $new->titre = $values['titre'];
        $new->description = $values['description'];
        $new->date = $values['type'];
        // Enregistrement de Media
        $new->save();
    }

    public function media_profil(){

        return $this->hasMany('App/Models/media_profil');

    }

    public function equipe_media(){

        return $this->hasMany('App/Models/equipe_media');

    }

    public function concours_media(){

        return $this->hasMany('App/Models/concours_media');

    }

    public function media_publication(){

        return $this->hasMany('App/Models/media_publication');

    }

    public function media_sponsor(){

        return $this->hasMany('App/Models/media_sponsor');

    }


}
