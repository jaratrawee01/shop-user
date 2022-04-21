<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Bank_account;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
 
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
       $request->validate([
            'bank_account_name' => 'required|max:255',
            'bank_account_number' => 'required|max:255',
        ]);
        $id =  Auth::user()->id;

        $data = new Bank_account;
        $data->id_user = $id;
        $data->bank_account_name = $request->bank_account_name;
        $data->bank_account_number = $request->bank_account_number;
        $data->bank_name = $request->bank_name;

        $data->save();
        return redirect('/withdraw');
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
        $account = DB::table('bank_accounts')
                ->where('id_user',$id)
                ->get(); 

        return view('admin.edit_bank_accounts' ,['account'=> $account]);
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
        $Withdraw = Bank_account::find($id);
        $Withdraw->bank_account_name = $request->bank_account_name; 
        $Withdraw->bank_account_number = $request->bank_account_number; 
        $Withdraw->bank_name = $request->bank_name; 
        $Withdraw->save();

        return redirect('/home')->with('status',"เเก้ไข บัญชีธรานคาร $request->bank_account_name สำเร็จ ");
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
