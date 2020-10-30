<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
/*    public function hasVote($user_id)
    {
         $hasVote = Votante::where('user_id', $user_id)->get();

        return (count($hasVote) > 0) ? true : false ;
    }
*/

    public function index()
    {
       
       
        
        $damas = \DB::table('dios_reina')
        ->where('genero_id',2)
        ->count();

        $caballeros = \DB::table('dios_reina')
        ->where('genero_id',1)
        ->where('nu_edad','>=',30)
        ->where('nu_edad','<',40)
        ->count();

        $jovenes = \DB::table('dios_reina')
        ->where('nu_edad','>=',15)
        ->where('nu_edad','=<',30)
        ->count();

         $niños1 = \DB::table('dios_reina')
        ->where('nu_edad','>=',0)
        ->where('nu_edad','<',2)
        ->count();
        //dd($niños1);

         $niños2 = \DB::table('dios_reina')
        ->where('nu_edad','>=',3)
        ->where('nu_edad','<',5)
        ->count();

         $niños3 = \DB::table('dios_reina')
        ->where('nu_edad','>=',6)
        ->where('nu_edad','<',8)
        ->count();

         $niños4 = \DB::table('dios_reina')
        ->where('nu_edad','>=',9)
        ->where('nu_edad','<',10)
        ->count();


        $damas1 = \DB::table('comandante')
        ->where('genero_id',2)
        ->count();

        $caballeros1 = \DB::table('comandante')
        ->where('genero_id',1)
        ->count();

        $jovenes1 = \DB::table('comandante')
        ->where('nu_edad','>=',15)
        ->where('nu_edad','=<',30)
        ->count();

         $niños5 = \DB::table('comandante')
        ->where('nu_edad','>=',0)
        ->where('nu_edad','<',2)
        ->count();

         $niños6 = \DB::table('comandante')
        ->where('nu_edad','>=',2)
        ->where('nu_edad','<',4)
        ->count();

         $niños7 = \DB::table('comandante')
        ->where('nu_edad','>=',4)
        ->where('nu_edad','<',6)
        ->count();

         $niños8 = \DB::table('comandante')
        ->where('nu_edad','>=',6)
        ->where('nu_edad','<',10)
        ->count();


         $damas2 = \DB::table('maria')
        ->where('genero_id',2)
        ->count();

        $caballeros2= \DB::table('maria')
        ->where('genero_id',1)
        ->count();

        $jovenes2 = \DB::table('maria')
        ->where('nu_edad','>=',15)
        ->where('nu_edad','=<',30)
        ->count();

         $niños9 = \DB::table('maria')
        ->where('nu_edad','>=',0)
        ->where('nu_edad','<',2)
        ->count();

         $niños10 = \DB::table('maria')
        ->where('nu_edad','>=',2)
        ->where('nu_edad','<',4)
        ->count();

         $niños11 = \DB::table('maria')
        ->where('nu_edad','>=',4)
        ->where('nu_edad','<',6)
        ->count();

         $niños12 = \DB::table('maria')
        ->where('nu_edad','>=',6)
        ->where('nu_edad','<',10)
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


       /* return view('admin.home.index')->with([

            'postulados' => $postulados
        ]);*/

       
    }
}
