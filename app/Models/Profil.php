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
        $inputs = $request->only('nom', 'prenom', 'email','fonction', 'description', 'departement', 'annee_etude',
                                 'equipe_id','membre_id');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Profil::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de l'existence de l'equipe'
            if (!Equipe::exists($inputs['equipe_id']) {
                $validator->errors()->add('equipes', Message::get('equipes.missing'));
            }
            // Vérification de l'existence d'un membre correspondant
            // SINON creation du mambre dans la BD
            if (!Membre::exists($inputs['membre_id']) {
                $validator->errors()->add('membres', Message::get('membres.missing'));
            }
            // Vérification de la non existence du profil
            if (Profil::exists($inputs['equipe_id'], $inputs['membre_id']) {
                $validator->errors()->add('equipes', Message::get('equipes.exist'));
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
        $newProfil = new Profil();
        // Définition des propriétés de Profil

        $newProfil->fonction = $values['fonction'];
        $newProfil->description = $values['description'];
        $newProfil->departement = $values['departement'];
        $newProfil->anneeEtude = $values['annee_etude'];
        // Enregistrement de Profil
        $newProfil->membres()->attach($values[])
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
