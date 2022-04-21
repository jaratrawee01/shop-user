@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('set-up')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">ตั้งค่าทั่วไป</p>
    </div>
    <br>
     <div class="border-th input-back ">
        <p  class="text span">สลับสาย<span>global Fast1 &nbsp;&nbsp;&nbsp;</span></p>
 </div>
</div>

@endsection
