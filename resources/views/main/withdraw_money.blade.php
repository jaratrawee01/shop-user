@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('user')}}">
            <i class="fa-solid fa-grid-2-plus"></i>
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-report">
        <div>
           <p  class="font-size"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightWithdraw" aria-controls="offcanvasRightWithdraw">ประวัติ</p>
        </div>
    </div>
    <div class="set-head">
        <p  class="text">ถอนเงิน</p>
    </div>
</div>
<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightWithdraw" aria-labelledby="offcanvasRightLabelWithdraw">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ประวัติ</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color">
            <div class="gift ">
                <img src="{{ asset('/image/empty-image.png') }}" class="img-shop-tb-2" alt="...">
                <p class="font-16"> ไม่มีข้อมูล</p>
            </div>
        </div>
    </div>
</div>
<div class="add-bank">
    <a href="{{ URL::to('#')}}">
        <i class="fas fa-plus text">&nbsp;  เพิ่มบัตรธนาคาร</i>
    </a> 
</div>
@endsection
