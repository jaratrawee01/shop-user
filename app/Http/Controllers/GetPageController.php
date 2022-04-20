<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class GetPageController extends Controller
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

    public function commission()
    {
        return view('main.commission');
    }

    public function walkThousand()
    {
        return view('main.walk_thousand');
    }
    public function allTems()
    {
        return view('main.all_tems');
    }
    public function myQrCode()
    {
        return view('main.my_QrCode');
    }
    public function member()
    {
        return view('main.member');
    }
    public function groupReport()
    {
        return view('main.group_report');
    }

    public function topUpMoney()
    {
        return view('main.top_up_money');
    }

    public function general()
    {
        return view('main.general');
    }
    public function editUser()
    {
        return view('main.editUser');
    }
    public function comment()
    {
        return view('main.comment');
    }
    public function Kyoto()
    {
        return view('main.Kyoto');
    }
    
    public function newUser(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'pass' => 'required|max:255',
        ]);
        $id =  Auth::user()->id;

        $flight = User::find($id);
        $flight->username = $request->name;
        $flight->password = Hash::make($request->pass);
        $flight->save(); 
        return Redirect()->back()->with('status',"เปลี่ยน  Username เเละ Password สำเร็จ");

    }

    public function newAdmin()
    {
        return view('auth.registerAdmin');
    }

    public function registerAdmin(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255, unique:users'],
            'password' => ['required', 'string', 'max:255'],
        ]);
        $data = new User;
        $data->username = $request->username;
        $data->invitation= rand();
        $data->is_idadmin= "1";
        $data->money= "0";
        $data->password = $request->password;
        $data->save();
        return redirect('/newAdmin')->with('status',"สมัคร Admin สำเสร็จเเล้ว");
    }

}
