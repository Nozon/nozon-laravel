<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function users()
    {
         return $this->belongsToMany('App\Models\Utilisateur')
                 ->withTimestamps();
    }

    public function resources()
    {
         return $this
                 ->belongsToMany('App\Models\Ressource')
                 ->withTimestamps()
                 ->withPivot('role');
    }

    public function hasRole($roleLabel, $resourceLabel)
    {
        $resources = $this->resources()
                        ->wherePivot('role', '=', $roleLabel)
                        ->get();
        foreach ($resources as $resource) {
            if ($resource->name == $resourceLabel) {
                return true;
            }
        }
        return false;
    }
}
