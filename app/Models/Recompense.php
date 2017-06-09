<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Recompense extends Model
{

    public static $rules = [
        'type' => ['required', 'string'],
        'description' => ['required', 'string']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('type', 'description');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Recompense::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence de Recompense
            if (Recompense::exists($inputs['type'], $inputs['description'], 
                $['equipeID'])) {
                $validator->errors()->add('exists', Message::get('recompense.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($type, $description, $equipeID)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cette url
        // Faire pareil pour les autres classes en vérifiant les clés primaires
        return Recompense::where('type', $type)->where('description', $description)->
                where('equipeID', $equipeID)->find() !== null;
    }

    /**
     * Enregistre en base de données un nouvel Recompense selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Recompense
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Recompense();
        // Définition des propriétés de Recompense
        $new->type = $values['type'];
        $new->description = $values['description'];
        // $new->equipeID = '1';
        // Enregistrement de Recompense
        $new->save();
    }

    public function equipe(){

        return $this->belongsTo('App/Models/Equipe');

    }

}