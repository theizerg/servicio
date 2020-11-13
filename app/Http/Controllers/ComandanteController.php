<?php

namespace App\Http\Controllers;

use App\Models\Comandante;
use App\Models\Edificio;
use App\Models\EstadoCivil;
use App\Models\Genero;
use App\Models\Nacionalidad;
use App\Models\Parentezco;
use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;

class ComandanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandante = Comandante::with([
                                 'genero:genero.id,nb_genero',
                                 'estadocivil:estado_civil.id,nb_estado_civil',
                                 'parentezco:parentezco.id,nb_parentezco',
                                 'edificio:edificio.id,nb_edificio',
                                 'nacionalidad:nacionalidad.id,nb_nacionalidad',
                                 'identidicacion:tipo_identificacion.id,nb_tipo_identificacion',
                            ])
        ->where('status',1)
                            ->get();

        $inactivos = Comandante::with([
                                 'genero:genero.id,nb_genero',
                                 'estadocivil:estado_civil.id,nb_estado_civil',
                                 'parentezco:parentezco.id,nb_parentezco',
                                 'edificio:edificio.id,nb_edificio',
                                 'nacionalidad:nacionalidad.id,nb_nacionalidad',
                                 'identidicacion:tipo_identificacion.id,nb_tipo_identificacion',
                            ])
         ->where('status',0)
                            ->get();

        return view('admin.comandante.index', compact('comandante','inactivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comandante     = Comandante::get();
        $edificio       = Edificio::get();
        $civil          = EstadoCivil::get();
        $genero         = Genero::get();
        $nacionalidades = Nacionalidad::get();
        $parentezco     = Parentezco::get();
        $tipoI          = TipoIdentificacion::get();

         return view('admin.comandante.create',compact('comandante',
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
        $comandante = Comandante::create($request->all());
        return json_encode(['success' => true, 'reina_id' => $comandante->encode_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comandante  $Comandante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comandante = Comandante::with('estadocivil')->find($id);
        //dd($comandante);
        return view ('admin.comandante.show', compact('comandante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comandante  $Comandante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comandante     = Comandante::find($id);
        $edificio       = Edificio::get();
        $civil          = EstadoCivil::get();
        $genero         = Genero::get();
        $nacionalidades = Nacionalidad::get();
        $parentezco     = Parentezco::get();
        $tipoI          = TipoIdentificacion::get();

         return view('admin.comandante.edit',compact(  'comandante',
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
     * @param  \App\Models\Comandante  $Comandante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comandante = Comandante::find($id);
        $comandante->update($request->all());

        return \Redirect::to('/comandante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comandante  $Comandante
     * @return \Illuminate\Http\Response
     */
    public function imprimir($id)
    {
        
        $fecha = "04/07/2018";
        
        $pdf= app('Fpdf');

        $pdf->AddPage();
       
        $pdf->Ln(1);

         $comandante = Comandante::with([
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
         $pdf->SetXY(55,10);
         $pdf->Cell(100,70,utf8_decode('Tras los pasos del comandante' ),0,1,'L');
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
         $pdf->Cell(37,6,$comandante->nb_nombres,2,0,'C');
         $pdf->Cell(37,6,$comandante->nb_apellidos,2,0,'C');
         $pdf->Cell(37,6,$comandante->identidicacion->nb_tipo_identificacion.'-'.$comandante->nu_cedula,2,0,'C');
         $pdf->Cell(37,6,$comandante->nro_familia,2,0,'C');
         $pdf->Cell(37,6,$comandante->nro_familia_edificio,2,0,'C');
         
         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Edad",1,0,'C');
         $pdf->Cell(37,6,"Fecha de nacimiento",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Nacionalidad"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Género"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Parentezco"),1,0,'C');

         $pdf->Ln(6);
         $pdf->Cell(37,6,$comandante->nu_edad,2,0,'C');
         $pdf->Cell(37,6,$comandante->fe_nacimiento,2,0,'C');
         $pdf->Cell(37,6,$comandante->nacionalidad->nb_nacionalidad,2,0,'C');
         $pdf->Cell(37,6,$comandante->genero->nb_genero,2,0,'C');
         $pdf->Cell(37,6,$comandante->parentezco->nb_parentezco,2,0,'C');

         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Estado civil",1,0,'C');
         $pdf->Cell(37,6,"Edificio",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Nota"),1,0,'C');
         

         $pdf->Ln(6);
         $pdf->Cell(37,6,$comandante->estadocivil->nb_estado_civil,2,0,'C');
         $pdf->Cell(37,6,$comandante->edificio->nb_edificio,2,0,'C');
         $pdf->Cell(37,6,$comandante->nb_nota,2,0,'C');

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
         $pdf->Cell(60,6,$comandante->display_bono,2,0,'C');
         $pdf->Cell(60,6,$comandante->display_clap,2,0,'C');
         $pdf->Cell(60,6,$comandante->display_hogares,2,0,'C');

         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(90,6,utf8_decode("¿Está en estado de desnutrición?"),1,0,'C');
         $pdf->Cell(90,6,utf8_decode("¿Recibe la bolsa de NUTRICIÓN?"),1,0,'C');
         
         
         $pdf->Ln(6);
         $pdf->Cell(90,6,utf8_decode($comandante->display_desnutricion),2,0,'C');
         $pdf->Cell(90,6,utf8_decode($comandante->display_desbolsa),2,0,'C');

         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(90,6,utf8_decode("¿Recibe la bombona de gas comunal?"),1,0,'C');
         $pdf->Cell(90,6,utf8_decode("Cantidad de bombonas"),1,0,'C');
         
         
         $pdf->Ln(6);
         $pdf->Cell(90,6,utf8_decode($comandante->display_gas),2,0,'C');
         $pdf->Cell(90,6,utf8_decode($comandante->nu_cantidad_bombonas),2,0,'C');
         


         //save file
        $headers=['Content-Type'=>'application/pdf'];
        return Response($pdf->Output(), 200, $headers);

    }
}
