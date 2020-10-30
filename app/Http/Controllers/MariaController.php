<?php

namespace App\Http\Controllers;

use App\Models\Maria;
use App\Models\Edificio;
use App\Models\EstadoCivil;
use App\Models\Genero;
use App\Models\Nacionalidad;
use App\Models\Parentezco;
use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;

class MariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maria = Maria::with([
                                 'genero:genero.id,nb_genero',
                                 'estadocivil:estado_civil.id,nb_estado_civil',
                                 'parentezco:parentezco.id,nb_parentezco',
                                 'edificio:edificio.id,nb_edificio',
                                 'nacionalidad:nacionalidad.id,nb_nacionalidad',
                                 'identidicacion:tipo_identificacion.id,nb_tipo_identificacion',
                            ])
                            ->get();

        return view('admin.maria.index', compact('maria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maria          = Maria::get();
        $edificio       = Edificio::get();
        $civil          = EstadoCivil::get();
        $genero         = Genero::get();
        $nacionalidades = Nacionalidad::get();
        $parentezco     = Parentezco::get();
        $tipoI          = TipoIdentificacion::get();

         return view('admin.maria.create',compact('maria',
                                                    'edificio',
                                                    'civil',
                                                    'genero',
                                                    'nacionalidades',
                                                    'parentezco',
                                                    'tipoI'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maria = Maria::create($request->all());
        return json_encode(['success' => true, 'reina_id' => $maria->encode_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maria  $maria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maria = Maria::with('estadocivil')->find($id);
        //dd($maria);
        return view ('admin.maria.show', compact('maria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maria  $maria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maria          = Maria::find($id);
        $edificio       = Edificio::get();
        $civil          = EstadoCivil::get();
        $genero         = Genero::get();
        $nacionalidades = Nacionalidad::get();
        $parentezco     = Parentezco::get();
        $tipoI          = TipoIdentificacion::get();

         return view('admin.maria.edit',compact(  'maria',
                                                    'edificio',
                                                    'civil',
                                                    'genero',
                                                    'nacionalidades',
                                                    'parentezco',
                                                    'tipoI'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maria  $maria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maria = Maria::find($id);
        $maria->update($request->all());

        return \Redirect::to('/maria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maria  $maria
     * @return \Illuminate\Http\Response
     */
    public function imprimir($id)
    {
        
        $fecha = "04/07/2018";
        
        $pdf= app('Fpdf');

        $pdf->AddPage();
       
        $pdf->Ln(1);

         $maria = Maria::with([
                                 'genero:genero.id,nb_genero',
                                 'estadocivil:estado_civil.id,nb_estado_civil',
                                 'parentezco:parentezco.id,nb_parentezco',
                                 'edificio:edificio.id,nb_edificio',
                                 'nacionalidad:nacionalidad.id,nb_nacionalidad',
                                 'identidicacion:tipo_identificacion.id,nb_tipo_identificacion',
                            ])
                            ->find($id);

        
         $pdf->Image('images/logo/logo.png',10,5,40,25,'PNG');
         $pdf->SetY(10);
         $pdf->SetFont('Arial','B',20);
         $pdf->SetXY(80,10);
         $pdf->Cell(100,70,utf8_decode('Maria Lionza' ),0,1,'L');
         $pdf->SetXY(150,10);
         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(60,5,utf8_decode("Fecha: ".date("d/m/Y")),0,1,'L');

         $pdf->Ln(50);
         $pdf->SetFont('Arial','B',16);
         $pdf->Cell(190,5,utf8_decode("Planilla de datos personales"),0,1,'C');
         $pdf->SetFont('Arial','B',10);
         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Nombres",1,0,'C');
         $pdf->Cell(37,6,"Apellidos",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Cédula"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Número de familia"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Número de edificio"),1,0,'C');

         $pdf->Ln(6);
         $pdf->Cell(37,6,$maria->nb_nombres,2,0,'C');
         $pdf->Cell(37,6,$maria->nb_apellidos,2,0,'C');
         $pdf->Cell(37,6,$maria->identidicacion->nb_tipo_identificacion.'-'.$maria->nu_cedula,2,0,'C');
         $pdf->Cell(37,6,$maria->nro_familia,2,0,'C');
         $pdf->Cell(37,6,$maria->nro_familia_edificio,2,0,'C');
         
         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Edad",1,0,'C');
         $pdf->Cell(37,6,"Fecha de nacimiento",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Nacionalidad"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Género"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Parentezco"),1,0,'C');

         $pdf->Ln(6);
         $pdf->Cell(37,6,$maria->nu_edad,2,0,'C');
         $pdf->Cell(37,6,$maria->fe_nacimiento,2,0,'C');
         $pdf->Cell(37,6,$maria->nacionalidad->nb_nacionalidad,2,0,'C');
         $pdf->Cell(37,6,$maria->genero->nb_genero,2,0,'C');
         $pdf->Cell(37,6,$maria->parentezco->nb_parentezco,2,0,'C');

         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Estado civil",1,0,'C');
         $pdf->Cell(37,6,"Edificio",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Nota"),1,0,'C');
         

         $pdf->Ln(6);
         $pdf->Cell(37,6,$maria->estadocivil->nb_estado_civil,2,0,'C');
         $pdf->Cell(37,6,$maria->edificio->nb_edificio,2,0,'C');
         $pdf->Cell(37,6,$maria->nb_nota,2,0,'C');

         $pdf->Ln(15);
         $pdf->SetFont('Arial','B',16);
         $pdf->Cell(190,5,utf8_decode("Actividades sociales gubernamentales"),0,1,'C');
         $pdf->SetFont('Arial','B',10);
         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(60,6,utf8_decode("¿Recibe bonos de la patria?"),1,0,'C');
         $pdf->Cell(60,6,utf8_decode("¿Recibe la bolsa del CLAP?"),1,0,'C');
         $pdf->Cell(60,6,utf8_decode("¿Recibe Hogares de la patria?"),1,0,'C');
         
         $pdf->Ln(6);
         $pdf->Cell(60,6,$maria->display_bono,2,0,'C');
         $pdf->Cell(60,6,$maria->display_clap,2,0,'C');
         $pdf->Cell(60,6,$maria->display_hogares,2,0,'C');

         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(90,6,utf8_decode("¿Está en estado de desnutrición?"),1,0,'C');
         $pdf->Cell(90,6,utf8_decode("¿Recibe la bolsa de NUTRICIÓN?"),1,0,'C');
         
         
         $pdf->Ln(6);
         $pdf->Cell(90,6,utf8_decode($maria->display_desnutricion),2,0,'C');
         $pdf->Cell(90,6,utf8_decode($maria->display_desbolsa),2,0,'C');

         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(90,6,utf8_decode("¿Recibe la bombona de gas comunal?"),1,0,'C');
         $pdf->Cell(90,6,utf8_decode("Cantidad de bombonas"),1,0,'C');
         
         
         $pdf->Ln(6);
         $pdf->Cell(90,6,utf8_decode($maria->display_gas),2,0,'C');
         $pdf->Cell(90,6,utf8_decode($maria->nu_cantidad_bombonas),2,0,'C');
         


         //save file
        $headers=['Content-Type'=>'application/pdf'];
        return Response($pdf->Output(), 200, $headers);
    }
}
