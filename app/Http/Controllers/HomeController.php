<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == "member") {
            Flash::warning("Bienvenido al al Panel de Administracion " . Auth::user()->name . " Los Controles estan habilitados solo a Administradores");
        } else {
            Flash::warning("Bienvenido al al Panel de Administracion " . Auth::user()->name);
        }

        return view('/admin/index');
    }

}
