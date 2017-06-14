<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Sponsor extends Model
{

    public static $rules = [
        'nom' => ['required', 'string']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('nom');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Sponsor::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Sponsor
            if (Sponsor::exists($inputs['nom'])) {
                $validator->errors()->add('exists', Message::get('sponsor.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($nom)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cette url
        // Faire pareil pour les autres classes en vérifiant les clés primaires
        return Sponsor::where('nom', $nom)->first() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Sponsor selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Sponsor
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Sponsor();
        // Définition des propriétés de Sponsor
        $new->nom = $values['nom'];
        // Enregistrement de Sponsor
        $new->save();
    }

    public function media_sponsor(){

        return $this->hasMany('App/Models/Media_sponsor');

    }
    
     public function niveau(){

        return $this->hasMany('App/Models/Niveau');

    }

}
