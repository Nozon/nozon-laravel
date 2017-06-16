<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Presse extends Model
{
    public static $rules = [
        'url'           => ['required', 'string'],
        'titre'         => ['required', 'string'],
        'description'   => ['required', 'string'],
        'date'          => ['required', 'string'],
        'edition_annee' => ['sometimes', 'required', 'integer']
    ];

    protected $table = 'presses';

    public static function getValidation(Request $request)
    {
        echo("Dans le validateur <br />");
        $inputs = $request->only('url', 'titre', 'description', 'date', 'edition_annee');
        // Création du validateur
        $validator = Validator::make($inputs, Presse::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Presse
            if (Presse::exists($inputs['url'])) {
                echo("Erreur validation : presse existe déjà <br />");
                $validator->errors()->add('exists', Message::get('presse.exists'));
            }
        });
        // Renvoi du validateur
        echo("Validation terminée <br />");
        return $validator;
    }


    public static function exists($url)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cette url
        return Presse::where('url', $url)->first() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Presse selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Presse
        $new = new Presse();
        // Définition des propriétés de Presse
        $new->url = $values['url'];
        $new->titre = $values['titre'];
        $new->description = $values['description'];
        $new->date = $values['date'];
        $new->edition_annee = $values['edition_annee'];
        // Enregistrement de Presse
        $new->save();
    }


     public function edition(){
        return $this->belongsTo('App\Models\Edition');
    }

}