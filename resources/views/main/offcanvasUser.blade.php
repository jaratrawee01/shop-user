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
                    <tr class="img-shop text-decoration">
                      <td class="col-3 col-sm-3 col-md-4 text-decoration" >
                        <a  href="my-qrcode" class="center-shop text-decoration">
                          <i class="fa-solid fa-qrcode colorText" style='font-size:28px'></i>
                          <br>
                          รหัส QR ของฉัน
                        </a> 
                      </td>
                      <td class="col-3 col-sm-3 col-md-4" >
                        <a  href="member" class="center-shop text-decoration">
                          <i class="fa-solid fa-users colorText" style='font-size:28px'></i>
                          <br>
                          โปรโหมดสมาชิก
                        </a> 
                      </td>
                      <td class="col-3 col-sm-3 col-md-4" >
                        <a  href="group-report" class="center-shop text-decoration">
                          <i class="fa-solid fa-chart-area colorText" style='font-size:28px'></i>
                          <br>
                          รายงานกลุ่ม
                        </a> 
                      </td>
                    </tr>
                  </tbody>
              </table>
          </div>
          <br>
          <div class="border-th">
            <img src="{{asset('/image/daili1.svg')}}" class="report-manu" alt="...">
            &nbsp;&nbsp;
            <a  href="getInvitation" class="font-size margin-top text-decoration">โปรโหมดตัวแทน</a>
           
          </div>
          <div class="border-th">
            <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
            &nbsp;&nbsp;
            <a  href="commission" class="font-size margin-top text-decoration">ค่าคอมมิชชั่นตัวแทน</a>
          </div>
          <div class="border-th">
            <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
            &nbsp;&nbsp;
            <a  href="walk-thousand" class="font-size margin-top text-decoration">รายละเอียดการเดิมพันของตัวแทน</a>
          </div>
          <div class="border-th">
              <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
              &nbsp;&nbsp;
              <a  href="all-tems" class="font-size margin-top text-decoration">บันทึกรายการตัวแทน</a>
          </div>
        </div>
      </div>      
</div>

{{-- ศูนย์บริการ --}}


<div>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel2">
      <div class="offcanvas-header head ">
        <div class="head-center"></div>
        <h5  class="text">ศูนย์บริการ</h5>
        <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body offcanvas-color">
            <a href="https://line.me/R/ti/p/@154kqcus?from=page" class="text-decoration">
              <div class="bgm">
                <div class="row ">
                  <div class="col-4 col-sm-4 col-md-4">
                    <img src="{{asset('/image/line.png')}}"  class="bgm-image"  alt="...">
                  </div>
                  <div class="col-auto col-sm-auto col-md-4">
                    <p class="font-size top">BGM(ฝ่ายบริการ)</p>
                  </div>
                  <div class="col-auto col-sm-auto col-md-4">
                    <button type="button" class="btn btn-outline-light  top contact ">ติดต่อ</button>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 serve ">
                  ทางเรายินดีให้บริการตลอด 24 ชั่วโมง
                </div>
              </div>
          </a>
      </div>
    </div>      
</div>

{{-- ศูนย์บริการ --}}


<div>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3" aria-labelledby="offcanvasRightLabel3">
      <div class="offcanvas-header head ">
        <div class="head-center"></div>
        <h5  class="text">ประกาศ</h5>
        <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body offcanvas-color">

      </div>
    </div>      
</div>





