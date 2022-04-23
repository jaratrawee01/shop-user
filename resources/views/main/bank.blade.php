@extends('layouts.home')

@section('content')
    <div class="head logo-center">
        <div class="set-back">
            <a href="{{ URL::to('withdraw')}}">
                <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
            </a>
        </div>
        <div class="set-report">
            <div>
               <p  class="font-size"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightWithdraw" aria-controls="offcanvasRightWithdraw">ประวัติ</p>
            </div>
        </div>
        <div class="set-head">
            <p  class="text">ผูกมัดบัญชีธนาคาร</p>
        </div>
    </div>
    <div class="input-bank">
        <form method="POST" action="{{ route('account.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label font-16">กรุณากรอกชื่อบัญชีธนาคาร</label>
                <input type="name" class="form-control input-back @error('bank_account_name') is-invalid @enderror" name="bank_account_name" id="exampleFormControlInput1"
                    placeholder="ชื่อ-นามสกุล" required>
                @error('bank_account_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label font-16">กรุณากรอกเลขบัญชีธนาคาร</label>
                <input type="text" class="form-control input-back @error('bank_account_number') is-invalid @enderror" name="bank_account_number" id="exampleFormControlInput1" placeholder="0-0000-0000" required>
                @error('bank_account_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label font-16">กรุณากรอกเลือกบัญชีธนาคาร</label>
                <select class="form-select input-back " name="bank_name" aria-label="Default select example">
                    <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                    <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                    <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                    <option value="ธนาคารซิตี้แบงก์">ธนาคารซิตี้แบงก์</option>
                    <option value="ธนาคารอาคารสงเคราะห์">ธนาคารอาคารสงเคราะห์</option>
                    <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                    <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
                    <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                    <option value="ธนาคาร ทหารไทยธนชาต">ธนาคาร ทหารไทยธนชาต</option>
                    <option value="ธนาคารเกียรตินาคิน">ธนาคารเกียรตินาคิน</option>
                </select>
            </div>
            <div class="font-16">
                สมาชิกที่เคารพ,เพื่อความปลอดภัยเงินทุนของคุณ,กรุณาผูกชื่อจริงของคุณและตั้งรหัสผ่านในการถอนเงิน,หากชื่อไม่ตรงกับชื่อบัญชี,จะไม่สามารถถอนได้
            </div>
            <br>
            <div class="logo-center">
                <button type="submit" class="btn btn-outline-light contact"  style="width: 100%">ยืนยันผูกมัดธนาคาร</button>
            </div>
        </form>
    </div>
@endsection
