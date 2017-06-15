<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class edition_sponsor extends Model
{
    

    public static $rules = [
        'valeur' => ['required', 'enum:[principale],[or], [argent], [bronze]']
    ];

    protected $table = "edition_sponsor";

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('valeur', 'edition_annee', 'sponsor_nom');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Edition_sponsor::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Niveau
            if (Edition_sponsor::exists($inputs['edition_annee'], 
               $inputs['sponsor_nom'])) {
                $validator->errors()->add('exists', Message::get('edition_sponsor.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($edition_annee, $sponsor_nom)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour ces attributs
        return Edition_sponsor::where('edition_annee', $edition_annee)->where('sponsor_nom', $sponsor_nom)->find() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Edition_sponsor selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Edition_sponsor
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Edition_sponsor();
        // Définition des propriétés de Edition_sponsor
        $new->valeur = $values['valeur'];
        // Enregistrement de Edition_sponsor
        $new->save();
    }

    public function edition(){

        return $this->belongsTo('App\Models\Edition')
            ->withPivot('edition_annee')
            ->withTimestamps();

    }
    
    public function sponsor(){

        return $this->belongsTo('App\Models\Sponsor')
            ->withPivot('sponsor_nom')
            ->withTimestamps();

    }

}