<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function index()
    {   

       $id =  Auth::user()->is_idadmin;
       

        if ($id === '1') {
            return view('home');
        }else{
            return view('welcome');
        }

      /*   return view('home'); */
       /*  return view('welcome'); */
    }
}
