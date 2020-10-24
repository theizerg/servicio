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
        'nb_nota'
    ];






    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }



     public function edificio()
    {
        return $this->belongsTo('App\Models\Edificio');
    }


     public function estadocivil()
    {
        return $this->belongsTo('App\Models\EstadoCivil');
    }


     public function genero()
    {
        return $this->belongsTo('App\Models\Genero');
    }


     public function nacionalidad()
    {
        return $this->belongsTo('App\Models\Nacionalidad');
    }

     public function parentezco()
    {
        return $this->belongsTo('App\Models\Parentezco');
    }

     public function tipoidentificacion()
    {
        return $this->belongsTo('App\Models\TipoIdentificacion');
    }
}
