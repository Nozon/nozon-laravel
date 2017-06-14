<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Profil extends Model
{

    public static $rules = [
        'fonction'      => ['required', 'string'],
        'description'   => ['required', 'string'],
        'departement'   => ['required', 'string'],
        'anneeEtude'    => ['required', 'integer']
    ];

    public static function getValidation($request, $membre_id, $equipe_id)
    {
        $inputs = $request->only('fonction', 'description', 'departement', 'anneeEtude');
        echo("Dans la fonction getValidation du Model profil : ");
        echo(implode(" | ", $inputs));
        echo(" | ".$membre_id." | ".$equipe_id);
        echo("<br />");

        // Création du validateur
        $validator = Validator::make($inputs, Profil::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($equipe_id, $membre_id) {
            // Vérification de l'existence de l'equipe'
            if (Equipe::where('equipe_id', $equipe_id) == null) {
                $validator->errors()->add('equipe', Message::get('equipes.missing'));
                echo ("equipe manquante : ".$equipe_id);
            }
            // Vérification de l'existence d'un membre correspondant
            if (Membre::where('membre_id', $membre_id) == null) {
                $validator->errors()->add('membre', Message::get('membres.missing'));
                echo ("mambre manquant : ".$membre_id);
            }
            // Vérification de la non existence du profil
            if (Profil::exists($equipe_id, $membre_id)) {
                $validator->errors()->add('equipe', Message::get('equipes.exist'));
                echo ("Profil déjà existant");
            }
        });
        echo("on a passé le validateur du profil !");
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($equipe_id, $membre_id)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour ces attributs
        return Profil::where('equipe_id', $equipe_id)->where('membre_id', $membre_id)->first() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Profil selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values, $membre_id, $equipe_id) {
        // Création d'une nouvelle instance de Profil
        echo("Dans la fonction createOne du profil : ");
        echo(implode(" | ", $values));
        echo(" | ".$membre_id." | ".$equipe_id);
        echo("<br />");
        $new = new Profil();
        // Définition des propriétés de Profil

        $new->membre_id = $membre_id;
        $new->equipe_id = $equipe_id;

        $new->fonction = $values['fonction'];
        $new->departement = $values['departement'];
        $new->description = $values['description'];
        $new->anneeEtude = $values['anneeEtude'];


        $new->save();

        return $new;
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
