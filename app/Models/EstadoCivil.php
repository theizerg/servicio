<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
      public $table = 'estado_civil';

  
 /*
    |
    | ** Relationships model **
    |
    */

    public function dios()
    {
        return $this->hasMany('App\Models\DiosReina');
    }
  
}
