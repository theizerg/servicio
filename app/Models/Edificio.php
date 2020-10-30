<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
     public $table = 'edificio';








    /*
    |
    | ** Relationships model **
    |
    */

    public function diosreina()
    {
        return $this->hasMany('App\Models\DiosReina');
    }

}
