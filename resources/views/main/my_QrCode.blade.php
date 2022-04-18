@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('index')}}">
            <i class="fa-solid fa-grid-2-plus"></i>
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">บันทึกรายการทั้งหมด</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 ">
            <img src="{{asset('/image/sh1_1.png')}}" class="imge-qrcode"  alt="...">

            <div class="col-6 col-sm-6 col-md-6">
                <img src="{{asset('/image/QR_code.webp')}}" class="qrcode center"  alt="...">
            </div>
        </div>
    </div>
</div>

@endsection

