<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Edificio;
use App\Models\EstadoCivil;
use App\Models\Genero;
use App\Models\Nacionalidad;
use App\Models\Parentezco;
use App\Models\TipoIdentificacion;
use App\Models\TipoConsejoComunal;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->username = 'acalderon';
        $user->name = 'Alicia';
        $user->nu_cedula = '25212293';
        $user->last_name = 'Calderon';
        $user->email = 'theizerg@gmail.com';
        $user->password = 'admin';
        $user->status = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('admin');



        $edificio = new Edificio;
        $edificio->nb_edificio = 'CENTRO OMNI';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'DR. PAUL';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'MARISCAL SUCRE';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'PORTUGAL';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'SEGUROS CARACAS';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'CENTRO 83';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'SOD';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'ALIVERT';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'KIRIPITAL';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'MANHATTAN';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'BOLIVAR';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'TORRE CUJÍ';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'SOFIA';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'LA PARRA';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'YAMIN';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'SAN CARLOS';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'EL SABAL';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'SAN JORGE';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'TARMA';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = '8A';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'BOYACA';
        $edificio->save();

        $edificio = new Edificio;
        $edificio->nb_edificio = 'CARIBE';
        $edificio->save();

        $estado = new EstadoCivil;
        $estado->nb_estado_civil = 'SOLTERO(A)';
        $estado->save();

        $estado = new EstadoCivil;
        $estado->nb_estado_civil = 'CASADO(A)';
        $estado->save();

        $estado = new EstadoCivil;
        $estado->nb_estado_civil = 'VIUDO(A)';
        $estado->save();

        $estado = new EstadoCivil;
        $estado->nb_estado_civil = 'DIVORCIADO(A)';
        $estado->save();


        $estado = new Genero;
        $estado->nb_genero = 'MASCULINO';
        $estado->save();

        $genero = new Genero;
        $genero->nb_genero = 'FEMENINO';
        $genero->save();

        $nac = new Nacionalidad;
        $nac->nb_nacionalidad = 'EXTRANJERO';
        $nac->save();

        $nac = new Nacionalidad;
        $nac->nb_nacionalidad = 'VENEZOLANO';
        $nac->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'MADRE';
        $parent->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'PADRE';
        $parent->save();


        $parent = new Parentezco;
        $parent->nb_parentezco = 'HIJO(A)';
        $parent->save();


        $parent = new Parentezco;
        $parent->nb_parentezco = 'JEFE DE FAMILIA';
        $parent->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'TIO(A)';
        $parent->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'SOBRINO(A)';
        $parent->save();
         
        $parent = new Parentezco;
        $parent->nb_parentezco = 'AMIGO';
        $parent->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'CONCUBINO';
        $parent->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'PAREJA';
        $parent->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'PRIMO(A)';
        $parent->save();


        $parent = new Parentezco;
        $parent->nb_parentezco = 'SUEGRO(A)';
        $parent->save();

        $parent = new Parentezco;
        $parent->nb_parentezco = 'HERMANO(A)';
        $parent->save();

        $identif = new TipoIdentificacion;
        $identif->nb_tipo_identificacion = 'V';
        $identif->save();

        $identif = new TipoIdentificacion;
        $identif->nb_tipo_identificacion = 'E';
        $identif->save();

        $consej = new TipoConsejoComunal;
        $consej->nb_consejo_comunal = 'DIOS REINA';
        $consej->save();

        $consej = new TipoConsejoComunal;
        $consej->nb_consejo_comunal = 'TRAS LOS PASOS DEL COMANDANTE';
        $consej->save();

        $consej = new TipoConsejoComunal;
        $consej->nb_consejo_comunal = 'MARIA LIONZA';
        $consej->save();






    }
}
