<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Presse extends Model
{

    public static $rules = [
        'url' => ['required', 'string'],
        'titre' => ['required', 'string'],
        'description' => ['required', 'string'],
        'date' => ['required', 'string']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('url', 'titre', 'description', 'date');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Presse::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Presse
            if (Presse::exists($inputs['url'])) {
                $validator->errors()->add('exists', Message::get('presse.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($url)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cette url
        // Faire pareil pour les autres classes en vérifiant les clés primaires
        return Presse::where('url', $url)->first() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Presse selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Presse
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Presse();
        // Définition des propriétés de Presse
        $new->url = $values['url'];
        $new->titre = $values['titre'];
        $new->description = $values['description'];
        $new->date = $values['date'];
        // edition_annee : à remplacer une fois que les Model/Controller d'Edition sont faits
        $new->edition_annee = '2017';
        // Enregistrement de Presse
        $new->save();
    }

     public function edition(){

        return $this->belongsTo('App/Models/Edition');

    }

}