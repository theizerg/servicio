<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class InicioController extends Controller
{

     public function index()
    {
       
       
        
        $damas = \DB::table('dios_reina')
        ->where('genero_id',2)
        ->count();

        $caballeros = \DB::table('dios_reina')
        ->where('genero_id',1)
        ->whereBetween("nu_edad", [31,40])
        ->count();
         
        $jovenes = \DB::table('dios_reina')
        ->whereBetween("nu_edad", [15,30])
        ->count();

        

         $niños1 = \DB::table('dios_reina')
        ->whereBetween("nu_edad", [0,2])
        ->count();
        //dd($niños1);

         $niños2 = \DB::table('dios_reina')
        ->whereBetween("nu_edad", [3,5])
        ->count();

         $niños3 = \DB::table('dios_reina')
        ->whereBetween("nu_edad", [6,8])
        ->count();

         $niños4 = \DB::table('dios_reina')
        ->whereBetween("nu_edad", [9,10])
        ->count();


        $damas1 = \DB::table('comandante')
        ->where('genero_id',2)
        ->count();

        $caballeros1 = \DB::table('comandante')
        ->where('genero_id',1)
        ->whereBetween("nu_edad", [31,40])
        ->count();

        $jovenes1 = \DB::table('comandante')
        ->whereBetween("nu_edad", [15,30])
        ->count();

         $niños5 = \DB::table('comandante')
        ->whereBetween("nu_edad", [0,2])
        ->count();

         $niños6 = \DB::table('comandante')
        ->whereBetween("nu_edad", [3,4])
        ->count();

         $niños7 = \DB::table('comandante')
        ->whereBetween("nu_edad", [5,6])
        ->count();

         $niños8 = \DB::table('comandante')
        ->whereBetween("nu_edad", [7,10])
        ->count();


         $damas2 = \DB::table('maria')
        ->where('genero_id',2)
        ->count();

        $caballeros2= \DB::table('maria')
        ->where('genero_id',1)
        ->whereBetween("nu_edad", [31,40])
        ->count();

        $jovenes2 = \DB::table('maria')
        ->whereBetween("nu_edad", [15,30])
        ->count();

         $niños9 = \DB::table('maria')
        ->whereBetween("nu_edad", [0,2])
        ->count();

         $niños10 = \DB::table('maria')
        ->whereBetween("nu_edad", [3,4])
        ->count();

         $niños11 = \DB::table('maria')
        ->whereBetween("nu_edad", [5,6])
        ->count();

         $niños12 = \DB::table('maria')
        ->whereBetween("nu_edad", [7,10])
        ->count();



        return view('admin.home.index')
        ->with([

            'damas'      => $damas,
            'caballeros' => $caballeros,
            'jovenes'    => $jovenes,
            'niños1'     => $niños1,
            'niños2'     => $niños2,
            'niños3'     => $niños3,
            'niños4'     => $niños4,
            'damas1'      => $damas1,
            'caballeros1' => $caballeros1,
            'jovenes1'    => $jovenes1,
            'niños5'      => $niños5,
            'niños6'      => $niños6,
            'niños7'      => $niños7,
            'niños8'      => $niños8,
            'damas2'      => $damas2,
            'caballeros2' => $caballeros2,
            'jovenes2'    => $jovenes2,
            'niños9'      => $niños9,
            'niños10'      => $niños10,
            'niños11'      => $niños11,
            'niños12'      => $niños12


        ]);
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
