<?php

namespace App\Models;

use Carbon\Carbon;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Media extends Model
{
    protected $table = "medias";

    public static function getValidation(Request $request)
    {
        // Récupération des inputs
        $inputs = $request->only('url', 'titre', 'description', 'type');
        echo("Dans la fonction getValidation du Model: ");
        echo(implode(" | ", $inputs));
        echo("<br />");
        // Création du validateur
        $validator = Validator::make($inputs, Media::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            // Vérification de la non-existence du Media
            if (Media::exists($inputs['url'])) {
                $validator->errors()->add('exists', Message::get('media.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }

    /**
     * Enregistre en base de données un nouveau Media selon les $values donnés
     * @param array $values
     */
    public static function createOne($nom, $publication) {
        // Création d'une nouvelle instance de Media
        echo("Dans la fonction createOne du Media: ");
        echo($nom);
        echo("<br />");
        $new = new Media();
        $new->nom = $nom;

        $new->save();

        $new->publications()->attach($publication->id);
    }

    public static function upload($image, $type) {
      $CarbonNow = Carbon::now();
      $StrinsTimestamp = $CarbonNow->toDateString();

      $nomImage = md5($type.time());
      // $nomImage = "HydroNozonUpload".$StrinsTimestamp.$type;

      $path= public_path("img/".$type."/".$nomImage.".jpg");
      $image->save($path);

      return $image;
    }
  
    // //recuperation de l'image depuis la requete
    // $image = $request->file('image');
    // //création d'un nom basé sur l'heure actuelle
    // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    // $destinationPath = public_path('/images');
    // $image->move($destinationPath, $input['imagename']);
    // $this->postImage->add($input);

    public function profil(){

        return $this->belongsToMany('App\Models\Profil');

    }

    public function equipes(){

        return $this->belongsToMany('App\Models\Equipe');

    }

    public function editions(){

        return $this->belongsToMany('App\Models\Edition');

    }

    public function publications(){

        return $this->belongsToMany('App\Models\Publication');

    }

    public function sponsors(){

        return $this->belongsToMany('App\Models\Sponsor');

    }


}
