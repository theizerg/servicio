<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{





    public function index(Request $request)
    {
        $logins = Login::WithUser()->orderBy('login_at', 'desc')->paginate(4);
        return view('admin.login.index', ['logins' => $logins]);
    }




    public function show($id)
    {
        $logins = Login::WithUser()->where('user_id', \Hashids::decode($id)[0])->orderBy('login_at', 'desc')->paginate(4);

        return view('admin.login.index', ['logins' => $logins]);

    }


}
