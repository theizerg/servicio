<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Postulados;
use App\Models\Votante;
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
      
       

        return view('admin.home.index');


       /* return view('admin.home.index')->with([

            'postulados' => $postulados
        ]);*/

       
    }
}
