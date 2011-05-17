<?php

namespace App\Http\Controllers;

use App\Models\DiosReina;
use App\Models\Edificio;
use App\Models\EstadoCivil;
use App\Models\Genero;
use App\Models\Nacionalidad;
use App\Models\Parentezco;
use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;

class DiosReinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $reinas = DiosReina::get();
        return view('admin.reina.index', compact('reinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reina          = DiosReina::get();
        $edificio       = Edificio::get();
        $civil          = EstadoCivil::get();
        $genero         = Genero::get();
        $nacionalidades = Nacionalidad::get();
        $parentezco     = Parentezco::get();
        $tipoI          = TipoIdentificacion::get();

         return view('admin.reina.create',compact(  'reina',
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
        $reina = DiosReina::create($request->all());
        return json_encode(['success' => true, 'reina_id' => $reina->encode_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiosReina  $diosReina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reina = DiosReina::with('estadocivil')->find($id);
        //dd($reina);
        return view ('admin.reina.show', compact('reina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiosReina  $diosReina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reina = DiosReina::find($id);
        $edificio       = Edificio::get();
        $civil          = EstadoCivil::get();
        $genero         = Genero::get();
        $nacionalidades = Nacionalidad::get();
        $parentezco     = Parentezco::get();
        $tipoI          = TipoIdentificacion::get();

         return view('admin.reina.edit',compact(  'reina',
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
     * @param  \App\Models\DiosReina  $diosReina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reina = DiosReina::find($id);
        $reina->update($request->all());

        return \Redirect::to('/reina');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiosReina  $diosReina
     * @return \Illuminate\Http\Response
     */
    public function imprimir($id)
    {
        
        $fecha = "04/07/2018";
        
        $pdf= app('Fpdf');

        $pdf->AddPage();
       
        $pdf->Ln(1);

        $reina= DiosReina::find($id);
        
         $pdf->Image('images/logo/logo.png',10,5,40,25,'PNG');
         $pdf->SetY(10);
         $pdf->SetFont('Arial','B',20);
         $pdf->SetXY(55,10);
         $pdf->Cell(100,70,utf8_decode('Consejo comunal Dios Reina' ),0,1,'L');
         $pdf->SetXY(150,10);
         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(60,5,utf8_decode("Fecha: ".date("d/m/Y")),0,1,'L');

         $pdf->Ln(50);
         $pdf->SetFont('Arial','B',16);
         $pdf->Cell(190,5,utf8_decode("Datos generados"),0,1,'C');
         $pdf->SetFont('Arial','B',10);
         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Nombres",1,0,'C');
         $pdf->Cell(37,6,"Apellidos",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Cédula"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Número de familia"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Número de edificio"),1,0,'C');

         $pdf->Ln(6);
         $pdf->Cell(37,6,$reina->nb_nombres,2,0,'C');
         $pdf->Cell(37,6,$reina->nb_apellidos,2,0,'C');
         $pdf->Cell(37,6,$reina->identidicacion->nb_tipo_identificacion.'-'.$reina->nu_cedula,2,0,'C');
         $pdf->Cell(37,6,$reina->nro_familia,2,0,'C');
         $pdf->Cell(37,6,$reina->nro_familia_edificio,2,0,'C');
         
         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Edad",1,0,'C');
         $pdf->Cell(37,6,"Fecha de nacimiento",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Nacionalidad"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Género"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Parentezco"),1,0,'C');

         $pdf->Ln(6);
         $pdf->Cell(37,6,$reina->nu_edad,2,0,'C');
         $pdf->Cell(37,6,$reina->fe_nacimiento,2,0,'C');
         $pdf->Cell(37,6,$reina->nacionalidad->nb_nacionalidad,2,0,'C');
         $pdf->Cell(37,6,$reina->genero->nb_genero,2,0,'C');
         $pdf->Cell(37,6,$reina->parentezco->nb_parentezco,2,0,'C');

         $pdf->Ln(6);
         $pdf->SetX(10);
         $pdf->Cell(37,6,"Estado civil",1,0,'C');
         $pdf->Cell(37,6,"Edificio",1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Nota"),1,0,'C');
         $pdf->Cell(37,6,utf8_decode("Nota"),1,0,1,'C');
         $pdf->Cell(37,6,utf8_decode("Nota"),1,0,1,'C');

         $pdf->Ln(6);
         $pdf->Cell(37,6,$reina->estadocivil->nb_estado_civil,2,0,'C');
         $pdf->Cell(37,6,$reina->edificio->nb_edificio,2,0,'C');
         $pdf->Cell(37,6,$reina->nb_nota,2,0,'C');
         $pdf->Cell(37,6,$reina->genero->nb_genero,2,0,1,'C');
         $pdf->Cell(37,6,$reina->parentezco->nb_parentezco,2,0,1,'C');



         //save file
        $headers=['Content-Type'=>'application/pdf'];
        return Response($pdf->Output(), 200, $headers);


    }
}
