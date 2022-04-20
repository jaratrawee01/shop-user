<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
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
    public function index()
    {   

      $id =  Auth::user()->is_idadmin;
        $contBank = DB::table('bank_accounts')
            ->where('id_user',Auth::user()->id)  
            ->count(); 
       
        if ($contBank !== 0) {
            $bank = DB::table('bank_accounts')
                ->where('id_user',Auth::user()->id)  
                ->get();
            Session::put('bank_name', $bank[0]->bank_name);
            Session::put('username', $bank[0]->bank_account_name); 
        }

        if ($id === '1') {
            $admin = DB::table('users')
                ->where('is_idadmin', 1)  
                ->get(); 
            $user = DB::table('users')
                ->where('is_idadmin', 0)  
                ->get(); 
            
            return view('home',['admin' => $admin,'user'=> $user]);
        }else{
            return view('welcome');
        }

      /*   return view('home'); */
       /*  return view('welcome'); */
    }
}
