@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('set-up')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">แก้ไขรหัสผ่าน</p>
    </div>
</div>
    <div class="input-bank">
        <div style="text-align: center">
            @if (session('status'))
                <strong style="color: #fff">{{ session('status') }}</strong>
            @endif
        </div>
        <form method="POST" action="{{('new-user')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label font-16">username</label>
                <input type="0" class="form-control input-back @error('name') is-invalid @enderror" name="name" id="exampleFormControlInput1"
                    placeholder="username" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: #fff">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label font-16">new password</label>
                <input type="0" class="form-control input-back @error('pass') is-invalid @enderror" name="pass" id="exampleFormControlInput1"
                    placeholder="new password" required>
                @error('pass')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: #fff">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="logo-center">
                <button type="submit" class="btn btn-outline-light contact  col-12 col-md-8" >บันทึกข้อมูล</button>
            </div>
        </form>
    </div> 

@endsection
