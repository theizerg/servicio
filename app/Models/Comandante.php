<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comandante extends Model
{
      public $table = 'comandante';

    
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nb_nombres',
        'nb_apellidos',
        'nu_cedula', 
        'nro_familia', 
        'nro_familia_edificio',
        'nu_edad',
        'fe_nacimiento',
        'identificacion_id',
        'nacionalidad_id',
        'genero_id', 
        'parentezco_id', 
        'edificio_id',
        'estado_civil_id',
        'user_id',
        'nb_nota',
        'benf_bono_patria',
        'benf_bolsas_clap',
        'benf_hogares_patria',
        'benf_bolsas_nutricion',
        'benf_estado_desnutricion',
        'benf_bombonas_gas',
        'nu_cantidad_bombonas'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User','id');
    }



     public function edificio()
    {
        return $this->BelongsTo('App\Models\Edificio', 'edificio_id');
    }


     public function estadocivil()
    {
        return $this->belongsTo('App\Models\EstadoCivil','estado_civil_id');
    }


     public function genero()
    {
        return $this->belongsTo('App\Models\Genero','genero_id');
    }


     public function nacionalidad()
    {
        return $this->belongsTo('App\Models\Nacionalidad','nacionalidad_id');
    }

     public function parentezco()
    {
        return $this->belongsTo('App\Models\Parentezco','parentezco_id');
    }

     public function identidicacion()
    {
        return $this->belongsTo('App\Models\TipoIdentificacion','identificacion_id');
    }





     public function getDisplayBonoAttribute()
    {
        return $this->benf_bono_patria == 1 ? 'Activo' : 'Denegado';
    }

    public function getDisplayClapAttribute()
    {
 
        return $this->benf_bono_patria == 1 ? 'Activo' : 'Denegado';
    }
 
    public function getDisplayHogaresAttribute()
    {
 
        return $this->benf_hogares_patria == 1 ? 'Activo' : 'Denegado';
    }

    public function getDisplayNutricionAttribute()
    {
 
        return $this->benf_bolsas_nutricion == 1 ? 'Activo' : 'Denegado';
    }
    public function getDisplayDesnutricionAttribute()
    {
 
        return $this->benf_estado_desnutricion == 1 ? 'SÍ' : 'NO';
    }
    public function getDisplayDesbolsaAttribute()
    {
 
        return $this->benf_bolsas_nutricion == 1 ? 'SÍ' : 'NO';
    }


     public function getDisplayGasAttribute()
    {
 
        return $this->benf_bombonas_gas == 1 ? 'SÍ' : 'NO';
    }
}
