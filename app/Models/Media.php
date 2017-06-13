<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Media extends Model
{

    public static $rules = [
        'url' => ['required', 'url'],
        'titre' => ['required', 'string'],
        'description' => ['required', 'string'],
        //Comment obliger l'utilisateur à rentrer le bon type
        'type' => ['required', 'regex:/photo/,/video/']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('url', 'titre', 'description', 'type');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Media::$rules);
        // Ajout des contraintes supplémentaires
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
     * Enregistre en base de données un nouveau Media selon les $values donnés
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