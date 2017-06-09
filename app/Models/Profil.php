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
        'anneeEtude' => ['required', 'integer']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('fonction', 'description', 'departement', 'anneeEtude');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Profil::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Profil
            if (Profil::exists($inputs['equipeID'], $inputs['membreID'])) {
                $validator->errors()->add('exists', Message::get('profil.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($euipqID, $membreID)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour ces attributs
        return Profil::where('equipeID', $equipeID)->where('membreID', $membreID)->find() !== null;
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
        $new->anneeEtude = $values['anneeEtude'];
        // Ici on entre les clés étrangères associées à une valeur arbitraire
        $new->equipeID = '1';
        $new->membreID = '1';
        // Enregistrement de Profil
        $new->save();
    }

    public function membre(){

        return $this->belongsTo('App/Models/Membre');

    }
    
    public function media_profil(){

        return $this->hasMany('App/Models/Media_profil');

    }
    
    public function equipe(){

        return $this->belongsTo('App/Models/Equipe');

    }

}