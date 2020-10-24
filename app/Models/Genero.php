<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
      public $table = 'genero';






	
	
      
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
