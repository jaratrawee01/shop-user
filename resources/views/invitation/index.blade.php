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
        <a href="{{ URL::to('createCode')}}">
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
            @foreach ($users as $user)
                <tr class="onClickBtn">
                    <td class="col-3 col-sm-3 col-md-3" >
                        {{ $user->code }} 
                        <span class="tooltiptext" id="{{$user->code}}" onclick="functionCopy({{$user->code}})">คัดลอก</span>
                    </td>
                    <td class="col-3 col-sm-3 col-md-3">
                        {{ $user->percent }}
                        <span> {{ $user->enrol }}</span>
                    </td>
                    <td class="col-3 col-sm-3 col-md-3 ">
                        @if ($user->status == 'on')
                            <p onclick="myFunction()">เปิดการใช้งาน</p>
                        @else
                            <p style="color: #adb5bd"  onclick="myFunction()">ปิดการใช้งาน</p>
                        @endif
                    </td>
                    <td class="col-3 col-sm-3 col-md-3" >
                        <a href="{{ URL::to('edit-inv',$user->id)}}">
                            <button type="button" class="btn btn-success">เเก้ไข</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button onclick="myFunction()">Click me</button>
</div>

@endsection
