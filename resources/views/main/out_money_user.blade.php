@extends('layouts.app')

@section('content')
<div class="container">
    <div style="text-align: center">
        @if (session('status'))
            <strong style="color: #0d6efd;font-size: 20px">{{ session('status') }}</strong>
        @endif 
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ถอนเงิน สมาชิก</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <table class="table table-bordered text-table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">username</th>
              <th scope="col">ชื่อบัญชี</th>
              <th scope="col">เลขบัญชี</th>
              <th scope="col">ธนาคาร</th>
              <th scope="col">จำนวนเงิน ถอน</th>
              <th scope="col">จำนวนเงิน คงเหลือ</th>
            </tr>
          </thead>
        <tbody>
            @php
             $idUser = 1;   
            @endphp
            @foreach ($users as $user)
                <tr class="onClickBtn" >
                        <td class="col-1 col-sm-1 col-md-1" >
                            {{ $idUser++ }} 
                        </td>
                        <td class="col-1 col-sm-1 col-md-1" >
                          {{ $user->username }} 
                      </td>
                        <td class="col- col-sm- col-md-">
                          {{ $user->bank_account_name }} 
                        </td>
                        <td class="col- col-sm- col-md- ">
                          {{ $user->bank_account_number }} 
                        </td>
                        <td class="col- col-sm- col-md-" >
                            {{ $user->bank_name }} 
                         </td>
                        <td class="col- col-sm- col-md-" >
                         @php
                          $withdrawMoney =  number_format( $user->withdrawMoney,2);
                          $moneyAll =  number_format( $user->money,2)
                         @endphp
                        {{ $withdrawMoney }}  บาท  
                        </td>
                        <td class="col- col-sm- col-md-" >
                            {{ $moneyAll }}  บาท  
                            </td>
                    <td class="col- col-sm- col-md-" >

                        <a   href="{{ URL::to('outMoney',$user->id,)}}" class="btn btn-outline-info"  onclick="if(confirm('ยืนยันการอนุมัติ การถอน')) return true; else return false;" >อนุมัติ</a>&nbsp;&nbsp;
                        <a   href="{{ URL::to('remove',$user->id)}}" class="btn btn-outline-secondary" onclick="if(confirm('ไม่อนุมัติการถอน')) return true; else return false;">ไม่อนุมัติ</a>
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>
      

@endsection
