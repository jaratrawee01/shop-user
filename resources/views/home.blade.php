@extends('layouts.app')

@section('content')
<div class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Admin</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">User</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active">
          <table class="table table-bordered text-table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ชื่อ</th>
                  <th scope="col">รหัสคำเชิญ</th>
                  <th scope="col">จำนวนเงิน</th>
                </tr>
              </thead>
            <tbody>
                @php
                $idAdmin = 1;
                $idUser = 1;
                @endphp
                @foreach ($admin as $admin)
                    <tr class="onClickBtn" >
                            <td class="col-3 col-sm-3 col-md-3" >
                                {{ $idAdmin++ }} 
                               {{--  <span class="tooltiptext" id="{{$user->code}}" onclick="functionCopy({{$user->code}})">คัดลอก</span> --}}
                            </td>
                            <td class="col-3 col-sm-3 col-md-3">
                              {{ $admin->username }} 
                            </td>
                            <td class="col-3 col-sm-3 col-md-3 ">
                              {{ $admin->invitation }} 
                            </td>
                        <td class="col-3 col-sm-3 col-md-3" >
                           {{ $admin->money }} 
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <table class="table table-bordered text-table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ชื่อ</th>
                  <th scope="col">รหัสคำเชิญ</th>
                  <th scope="col">จำนวนเงิน</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr class="onClickBtn" >
                            <td class="col-3 col-sm-3 col-md-3" >
                                {{ $idUser++ }} 
                               {{--  <span class="tooltiptext" id="{{$user->code}}" onclick="functionCopy({{$user->code}})">คัดลอก</span> --}}
                            </td>
                            <td class="col-3 col-sm-3 col-md-3">
                              {{ $user->username }} 
                            </td>
                            <td class="col-3 col-sm-3 col-md-3 ">
                              {{ $user->invitation }} 
                            </td>
                        <td class="col-3 col-sm-3 col-md-3" >
                           {{ $user->money }} 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
<script>

</script>
@endsection
