<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiosReina extends Model
{
    
    public $table = 'dios_reina';

    
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
        'benf_estado_desnutr icion',
        'benf_bombonas_gas'
    ];






    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }



     public function edificio()
    {
        return $this->belongsTo('App\Models\Edificio');
    }


     public function estadocivil()
    {
        return $this->belongsTo('App\Models\EstadoCivil', 'id', 'id');
    }


     public function genero()
    {
        return $this->belongsTo('App\Models\Genero', 'id');
    }


     public function nacionalidad()
    {
        return $this->belongsTo('App\Models\Nacionalidad', 'id');
    }

     public function parentezco()
    {
        return $this->belongsTo('App\Models\Parentezco', 'id');
    }

     public function identidicacion()
    {
        return $this->belongsTo('App\Models\TipoIdentificacion', 'id');
    }
}
