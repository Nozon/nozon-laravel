<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

use Carbon\Carbon;


class Publication extends Model {

    public static $rules = [
        'titre' => ['required', 'string'],
        'texte' => ['required', 'string'],
    ];

    public static function getValidation(Request $request) {
        // Récupération des inputs
        $inputs = $request->only('titre', 'texte', 'date');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Publication::$rules);
        // Pas d'ajout de contraintes pour les publications.

        // Renvoi du validateur
        return $validator;
    }

    public static function exists($titre, $texte, $edition_annee) {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour ces attributs
        return Publication::where('titre', $titre)->where('texte', $texte)->
                        where('edition_annee', $edition_annee)->find() !== null;
    }

    /**
     * Enregistre en base de données une nouvelle Publication selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Publication
        echo("Dans la fonction createOne de la publication: ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Publication();
        // Définition des propriétés de Publication
        $new->titre = $values['titre'];
        $new->texte = $values['texte'];
        $new->edition_annee = Session::get('edition_annee');
        // Enregistrement de Publication
        $new->save();

        echo ("publication créée dans la BD ! ");

        return $new;
    }

    public function medias() {

        return $this->belongsToMany('App\Models\Media');
    }

    public function edition() {

        return $this->belongsTo('App\Models\Edition');
    }

}
