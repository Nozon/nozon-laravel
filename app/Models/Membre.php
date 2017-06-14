<?php
namespace App\Models;
use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class Membre extends Model
{
    public static $rules = [
        'nom' => ['required', 'string'],
        'prenom' => ['required', 'string'],
        'email' => ['required', 'email'],
    ];
    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('nom', 'prenom', 'email');
        echo("Dans la fonction getValidation du modele Membre : ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Membre::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Membre
            if (Membre::exists($inputs['email'])) {
                $validator->errors()->add('exists', Message::get('membre.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }
    public static function exists($email)
    {
        // Vérifie qu'il n'existe pas de ligne dans la BD pour cet email
        return Membre::where('email', $email)->first() !== null;
    }
    /**
     * Enregistre en base de données un nouveau Membre selon les $values donnés
     * @param array $values
     */
    public static function createOne(array $values) {
        // Création d'une nouvelle instance de Membre
        echo("Dans la fonction createOne du Membre : ");
        echo(implode(" | ", $values));
        echo("<br />");
        $new = new Membre();
        // Définition des propriétés de Membre
        $new->nom = $values['nom'];
        $new->prenom = $values['prenom'];
        $new->email = $values['email'];
        // Enregistrement de Membre
        $new->save();
        // Nous recuperons l'id du membre créé a partir de son email
        return $new;
        // return $membre = Membre::where('email', $values['email'])->first();
    }
    public function profils(){
        return $this->hasMany('App/Models/Profil');
    }
}