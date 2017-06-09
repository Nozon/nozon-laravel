<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Niveau extends Model
{

    public static $rules = [
        'valeur' => ['required', 'regex:/principal/,/or/,/argent/,/bronze/']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('valeur');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Niveau::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Niveau
            if (Niveau::exists($inputs['valeur'])) {
                $validator->errors()->add('exists', Message::get('niveau.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($edition_annee, $sponsor_nom)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour ces attributs
        return Niveau::where('edition_annee', $edition_annee)->where('sponsor_nom', $sponsor_nom)->find() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Presse selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Niveau
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Niveau();
        // Définition des propriétés de Niveau
        $new->valeur = $values['valeur'];
        // edition_annee : à remplacer une fois que les Model/Controller d'Edition sont faits
        $new->edition_annee = '2017';
        $new->sponsor_nom = 'brüchtleflicken';
        // Enregistrement de Niveau
        $new->save();
    }

    public function edition(){

        return $this->belongsTo('App/Models/Edition');

    }
    
    public function Sponsor(){

        return $this->belongsTo('App/Models/Sponsor');

    }

}