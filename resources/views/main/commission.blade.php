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
        <p  class="text">ค่าคอมมิชชั่นตัวเเทน</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-5 col-sm-5 col-md-5">
           <input type="text" id="datepicker" class="datepicker" placeholder="20/02/2020">
        </div>
        <div class="col-5 col-sm-5 col-md-5">
            <input type="text" id="datepicker1" class="datepicker" placeholder="25/02/2020">
         </div>
        <div class="col-2 col-sm-2 col-md-2">
            <p class="data-text">วันที่</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-2 col-sm-2 col-md-2">
           <p class="radio">ชนิดข้อมูล :</p>
        </div>
        <div class="col-auto col-sm-auto col-md-auto radio">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                 ทั้งหมด
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                 ค่าคอมมิชชั่น
                </label>
            </div>
         </div>
        <div class="col-4 col-sm-4 col-md-4 radio">
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  โอนยอดที่เหลือ
                </label>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
           <p class="date">20/02/2022~21/02/2020 รวม :</p>
        </div>
    </div>
</div>
<div class="container logo-center">
    <div class="row">
        <div class="col-6 col-sm-6 col-md-6">
           <p class="date">0.00 <br> <span class="font-16">ค่าคอมมิชชั่น</span></p>
        </div>
        <div class="col-6 col-sm-6 col-md-6">
            <p class="date">0.00 <br> <span class="font-16">ยอดสั่งซื้อ</span></p>
         </div>
    </div>
</div>
<div class="container logo-center">
    <div class="row">
        <div class="col-3 col-sm-3 col-md-3">
           <p class="font-size">ตัวแทน</p>
        </div>
        <div class="col-3 col-sm-3 col-md-3">
            <p class="font-size">ยอดสั่งซื้อ</p>
         </div>
         <div class="col-3 col-sm-3 col-md-3">
            <p class="font-size">ชนิดของ</p>
         </div>
         <div class="col-3 col-sm-3 col-md-3">
            <p class="font-size">ค่าคอมมิชชั่น(B)</p>
         </div>
    </div>
</div>
<div class="container logo-center">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <img src="{{asset('/image/empty-image.png')}}" class="img-shop-tb-2"  alt="...">
        </div>
    </div>
</div>
<div class="container logo-center">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <button type="button" class="btn btn-outline-light comm-botton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">โอนไปที่ยอดคงเหลือ</button>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content background-color ">
        <div class="modal-header2 logo-center">
          <h5 class="modal-title "  id="staticBackdropLabel">กติกา</h5>
        </div>
        <div class="modal-body logo-center">
            <div class="font-size">ต้องการโยกค่าคอมมิชชั่นทั้งหมดไปยังยอดคงเหลือหรือไม่</div>
        </div>
        <div class="modal-footer2">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">ยกเลิก</button> &nbsp; &nbsp;
          <button type="button" class="btn btn-outline-light">ตกลง</button>
        </div>
      </div>
    </div>
  </div>
@endsection

