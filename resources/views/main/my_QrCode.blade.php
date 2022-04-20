<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.hade')
</head>
<body>

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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   {{-- xv --}}
</body>
@include('layouts.js')
</html>


