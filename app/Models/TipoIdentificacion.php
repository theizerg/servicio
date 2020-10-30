<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
      public $table = 'tipo_identificacion';








      
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
