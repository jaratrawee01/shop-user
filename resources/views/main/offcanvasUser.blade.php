{{-- ตัวเเทน --}}

<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel1">
        <div class="offcanvas-header head ">
          <div class="head-center"></div>
          <h5  class="text">ตัวเเทน</h5>
          <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="head text head-height">
              <img src="{{asset('/image/avatar90.png')}}" class="avatar" alt="...">
              <span>  &nbsp; {{Auth::user()->username}} </span>
              <p class="money-p"> ยอดเงิน: 0.00</p>
      </div>
        <div class="offcanvas-body offcanvas-color">
          <div class="container logo-center ">
              <table class="table table-bordered">
                  <tbody>
                    <tr class="img-shop">
                      <td class="col-3 col-sm-3 col-md-4" >
                          <i class="fa-solid fa-qrcode colorText" style='font-size:28px'></i>
                          <br>
                          <span class="center-shop" >รหัส QR ของฉัน</span>
                      </td>
                      <td class="col-3 col-sm-3 col-md-4" >
                          <i class="fa-solid fa-users colorText" style='font-size:28px'></i>
                          <br>
                          <span class="center-shop">โปรโหมดสมาชิก</span>
                      </td>
                      <td class="col-3 col-sm-3 col-md-4" >
                          <i class="fa-solid fa-chart-area colorText" style='font-size:28px'></i>
                          <br>
                          <span class="center-shop">รายงานกลุ่ม</span>
                      </td>
                    </tr>
                  </tbody>
              </table>
          </div>
          <br>
          <div class="border-th">
            <img src="{{asset('/image/daili1.svg')}}" class="report-manu" alt="...">
            &nbsp;&nbsp;
            <a  href="invitation" class="text margin-top text-decoration">โปรโหมดตัวแทน</a>
           
          </div>
          <div class="border-th">
            <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
            &nbsp;&nbsp;
            <span class="text margin-top">ค่าคอมมิชชั่นตัวแทน</span>
          </div>
          <div class="border-th">
            <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
            &nbsp;&nbsp;
            <span class="text margin-top">รายละเอียดการเดิมพันของตัวแทน</span>
          </div>
          <div class="border-th">
              <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
              &nbsp;&nbsp;
              <span class="text margin-top">บันทึกรายการตัวแทน</span>
          </div>
        </div>
      </div>      
</div>

{{-- ศูนย์บริการ --}}




