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
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiosReina  $diosReina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiosReina  $diosReina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiosReina  $diosReina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
