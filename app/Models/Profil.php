<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Profil extends Model
{

    public static $rules = [
        'fonction' => ['required', 'string'],
        'description' => ['required', 'string'],
        'departement' => ['required', 'string'],
        'annee_etude' => ['required', 'integer']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('fonction', 'description', 'departement', 'annee_etude',
                                 'equipe_id','membre_id');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Profil::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Profil
            if (Profil::exists($inputs['equipe_id'], $inputs['membre_id'])) {
                $validator->errors()->add('exists', Message::get('profil.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($equipe_id, $membre_id)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour ces attributs
        return Profil::where('equipe_id', $equipe_id)->where('membre_id', $membre_id)->find() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Profil selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Profil
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Profil();
        // Définition des propriétés de Profil
        $new->fonction = $values['fonction'];
        $new->description = $values['description'];
        $new->departement = $values['departement'];
        $new->anneeEtude = $values['annee_etude'];
        // Enregistrement de Profil
        $new->save();
    }

    public function membre(){

        return $this->belongsTo('App/Models/Membre');

    }
    
    public function medias(){

        return $this->belongsToMany('App/Models/Media');

    }
    
    public function equipe(){

        return $this->belongsTo('App/Models/Equipe');

    }

}