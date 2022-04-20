<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Withdraw_money;
use App\Models\User;

class outMoneyUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $name = $request->search;
       
        if ($name !== null) {

            $users = DB::table('users')
                    ->rightJoin('bank_accounts', 'users.id', '=', 'bank_accounts.id_user')
                    ->rightJoin('withdraw_moneys', 'bank_accounts.id_user', '=', 'withdraw_moneys.idUser')
                    ->where('withdraw_moneys.statusMoney', 0)  
                    ->where('bank_accounts.bank_account_name',  'LIKE', '%' . $name . '%')  
                    ->get();

                   return view('main.out_money_user',['users' => $users]);
       }else{

            $users = DB::table('users')
                ->rightJoin('bank_accounts', 'users.id', '=', 'bank_accounts.id_user')
                 ->rightJoin('withdraw_moneys', 'bank_accounts.id_user', '=', 'withdraw_moneys.idUser')
                ->where('withdraw_moneys.statusMoney', 0)
                ->get();
                

            return view('main.out_money_user',['users' => $users]);

       } 

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

    public function outMoney($id)
    {
        $withdraw_moneys = DB::table('withdraw_moneys')
                ->where('id', $id)  
                ->get(); 
        

        $moneyWit  =   (int)$withdraw_moneys[0]->withdrawMoney;
        $id_user  =   $withdraw_moneys[0]->idUser;
       
        $user = DB::table('users')
                ->where('id', $id_user)  
                ->get();
       
        $moneyUser  =   (int)$user[0]->money; 
        $username  =   $user[0]->username;         
        $moneyPlup =  $moneyUser - $moneyWit;

        $Withdraw = Withdraw_money::find($id);
        $Withdraw->statusMoney = "1"; 
        $Withdraw->save();

        $userMoney = User::find($id_user);
        $userMoney->money = $moneyPlup; 
        $userMoney->save();

        return redirect('/getOutMonetUser')->with('status',"อนุมัติ การถอนเงิน ของ $username  จำนวน $moneyWit  บาท เเล้ว");
 
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
        $withdraw_moneys = DB::table('withdraw_moneys')
        ->where('id', $id)  
        ->get(); 


        $moneyWit  =   (int)$withdraw_moneys[0]->withdrawMoney;
        $id_user  =   $withdraw_moneys[0]->idUser;

        $user = DB::table('users')
                ->where('id', $id_user)  
                ->get();

        $moneyUser  =   (int)$user[0]->money; 
        $username  =   $user[0]->username;         
        $moneyPlup =  $moneyUser - $moneyWit;

        $Withdraw = Withdraw_money::find($id);
        $Withdraw->statusMoney = "2"; 
        $Withdraw->save();

        return redirect('/getOutMonetUser')->with('status'," ยกเลิก การถอนเงิน ของ $username  จำนวน $moneyWit  บาท เเล้ว");

    }
}
