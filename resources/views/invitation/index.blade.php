@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('index')}}">
            <i class="fa-solid fa-grid-2-plus"></i>
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
            
        </a>
    </div>
    <div class="set-add">
        <a href="{{ URL::to('index')}}">
            <i class="fas fa-plus set text"  style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">โปรโหมดตัวแทน</p>
    </div>
</div>
<div class="container logo-center ">
    <table class="table table-bordered text-table">
        <thead>
            <tr>
              <th scope="col">รหัสเชิญ</th>
              <th scope="col">ส่วนลด</th>
              <th scope="col">สถานะ</th>
              <th scope="col">เเก้ไข</th>
            </tr>
          </thead>
        <tbody>
          <tr class="onClickBtn">
              <div></div>
            <td class="col-3 col-sm-3 col-md-3 ">
                466243459  <span  onclick="functionCopy(466243459)" id="466243459" class="tooltiptext">คัดลอก</span>
            </td>
            <td class="col-3 col-sm-3 col-md-3 " >
                9.9(999)
            </td>
            <td class="col-3 col-sm-3 col-md-3 " >
                เปิดใช้งาน
            </td>
            <td class="col-3 col-sm-3 col-md-3" >
                <button type="button" class="btn btn-success">เเก้ไข</button>
            </td>
          </tr>
          <tr>
            <td class="col-3 col-sm-3 col-md-3">
                566243459  <span onclick="functionCopy(566243459)" id="566243459" >คัดลอก</span>
            </td>
            <td class="col-3 col-sm-3 col-md-3 " >
                9.9(999)
            </td>
            <td class="col-3 col-sm-3 col-md-3 " >
                เปิดใช้งาน
            </td>
            <td class="col-3 col-sm-3 col-md-3" >
                <button type="button" class="btn btn-success">เเก้ไข</button>
            </td>
          </tr>
        </tbody>
    </table>
   
</div>

@endsection
