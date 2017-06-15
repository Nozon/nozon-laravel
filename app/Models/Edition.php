<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Edition extends Model
{

    public static $rules = [
        'annee'             => ['required', 'integer'],
        'textePresentation' => ['required', 'string'],
        'lieu'              => ['required', 'string'],
        'dateConcours'      => ['required', 'date'],
        'texteConcours'     => ['required', 'string']
    ];

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('anne', 'textePresentation', 'lieu');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Edition::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence de Edition
            if (Edition::exists($inputs['annee'])) {
                $validator->errors()->add('exists', Message::get('edition.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }


    public static function exists($annee)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cette annee
        return Edition::where('annee', $annee)->first() !== null;
    }

    /**
     * Enregistre en base de données une nouvelle Edition selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Edition
        echo("Dans la fonction createOne: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Edition();
        // Définition des propriétés de Edition
        $new->annee = $values['annee'];
        $new->texte_presentation = $values['textePresentation'];
        $new->lieu = $values['lieu'];
        $new->date_concours = $values['dateConcours'];
        $new->texte_concours = $values['texteConcours'];

        // Enregistrement de Edition
        $new->save();
    }

    public function presses(){

        return $this->hasMany('App\Models\Presse');

    }
    
    public function edition_sponsors(){

        return $this->hasMany('App\Models\edition_sponsor');

    }
    
    public function publications(){

        return $this->hasMany('App\Models\Publication');

    }
    
    public function medias(){

        return $this->belongsMany('App\Models\Edition_media');

    }
    
  
    public function equipes(){

        return $this->hasMany('App\Models\Equipe');

    }

}
