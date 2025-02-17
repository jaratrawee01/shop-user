<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {       
         $users = DB::table('invitations')
                        ->where('code',  $data['invitation'])
                        ->where('status',  'on')
                        ->count();
        if ($users === 1) {
            return Validator::make($data, [
                'username' => ['required', 'string', 'max:255', 'unique:users,username'],
                'invitation' => ['required', 'string', 'max:255', ],
                'password' => ['required', 'string', 'min:4', 'confirmed'],
            ]);
        }else{
            $data = ["invitation" =>  null];
              return Validator::make($data, [
                'invitation' => ['required', 'string', 'max:255', ],
            ]); 
            
        }
      
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $users = DB::table('invitations')
        ->where('code',  $data['invitation'])
        ->count();
        return User::create([
            'username' => $data['username'],
            'is_idadmin' => $data['is_admin'],
            'invitation' => $data['invitation'],
            'money' => '0',
            'password' => Hash::make($data['password']),
        ]);
    }
}
