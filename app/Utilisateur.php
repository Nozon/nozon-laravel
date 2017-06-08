<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'motDePasse',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    protected $hidden = [
       'motDePasse', 'remember_token',
    ];

    public function groupes()
    {
         return $this->belongsToMany('App\Models\Group')
                 ->withTimestamps();
    }

    public function hasRole($roleLabel, $ressourceLabel)
    {

        foreach ($this->groups as $group) {
            if ($group->hasRole($roleLabel, $ressourceLabel)) {
                return true;
            }
        }
        return false;
    }
}
