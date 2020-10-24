<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
      public $table = 'nacionalidad';





      
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
