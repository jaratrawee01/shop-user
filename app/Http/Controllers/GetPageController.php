<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetPageController extends Controller
{
    //

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

    public function withdrawMoney()
    {
        return view('main.withdraw_money');
    }
}
