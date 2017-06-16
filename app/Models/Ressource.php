<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    public function groups()
    {
         return $this->belongsToMany('App\Group')
                 ->withTimestamps()
                 ->withPivot('role');
    }
}
