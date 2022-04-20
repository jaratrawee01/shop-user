@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('set-up')}}">
            <i class="fa-solid fa-grid-2-plus"></i>
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text"></p>
    </div>
</div>

    <div class="input-bank">
        <form method="POST" action="{{ route('withdraw.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label font-16">username</label>
                <input type="0" class="form-control @error('withdrawMoney') is-invalid @enderror" name="withdrawMoney" id="exampleFormControlInput1"
                    placeholder="username" required>
                @if (session('status'))
                        <strong style="color: #fff">{{ session('status') }}</strong>
                @endif
                @error('withdrawMoney')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: #fff">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label font-16">new password</label>
                <input type="0" class="form-control @error('withdrawMoney') is-invalid @enderror" name="withdrawMoney" id="exampleFormControlInput1"
                    placeholder="new password" required>
                @if (session('status'))
                        <strong style="color: #fff">{{ session('status') }}</strong>
                @endif
                @error('withdrawMoney')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: #fff">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="logo-center">
                <button type="submit" class="btn btn-outline-light contact"  style="width:20%">บันทึกข้อมูล</button>
            </div>
        </form>
    </div> 

@endsection
