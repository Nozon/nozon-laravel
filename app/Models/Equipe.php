<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Equipe extends Model
{

    public static $rules = [
        'nom' => ['required', 'string'],
        'description' => ['required', 'string'],
        'type' => ['required', 'enum:[principal],[secondaire]'],
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('nom', 'description', 'type');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Equipe::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence de Equipe
            if (Equipe::exists($inputs['type'], $inputs['edition_annee'])) {
                $validator->errors()->add('exists', Message::get('equipe.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($type, $edition_annee)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour ce type et cette 
        // année d'édition
        return Equipe::where('type', $type)->where('edition_annee', $edition_annee)->first() !== null;
    }

    /**
     * Enregistre en base de données une nouvelle Equipe selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Equipe
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Equipe();
        // Définition des propriétés de Equipe
        $new->nom = $values['nom'];
        $new->description = $values['description'];
        $new->type = $values['type'];
        $new->date = $values['date'];
        // Enregistrement de Equipe
        $new->save();
    }

     public function recompenses(){

        return $this->hasMany('App/Models/Recompense');

    }
    
     public function profils(){

        return $this->hasMany('App/Models/Profil');

    }
    
     public function medias(){

        return $this->hasMany('App/Models/Media');

    }
    
     public function Edition(){

        return $this->belongsTo('App/Models/Edition');

    }

}