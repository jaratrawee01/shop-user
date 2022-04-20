<script type="text/JavaScript">
$(document).ready(function(){
   
  $(".navbarFooter").click(function(){
    let id =  $(this).attr('id');
   let status =  $(this).attr('value');

    if (id === 'home') {
        $("#home").addClass("active");
        $("#mainPage-none").show();
    }else{
        $("#home").removeClass("active");
        $("#mainPage-none").hide();
    }
    if (id === 'location') {
        $("#location").addClass("active");
        $("#business-none").show();
    }else{
        $("#location").removeClass("active");
        $("#business-none").hide();
    }
    if (id === 'gift') {
        $("#gift").addClass("active");
        $("#gift-none").show();
    }else{
        $("#gift").removeClass("active");
        $("#gift-none").hide();
    }
    if (id === 'user') {
        $("#user").addClass("active");
        $("#user-none").show();
        
    }else{
        $("#user").removeClass("active");
        $("#user-none").hide();
    }

    if (status === '0') {
        $(document).ready(function(){
            $('#onClickRegister').trigger('click');
            $("#home").addClass("active");
            $("#location").removeClass("active");
            $("#gift").removeClass("active");
            $("#user").removeClass("active");
            $("#mainPage-none").show();
            $("#form-login").show();
            $("#form-subscribe").hide();
        });
    }
  });
  
});
$( "#forgotError" ).click(function() {
    $("#forgot-error").show();
});


$( "#subscribe" ).click(function() {
    $("#form-login").hide();
    $("#form-subscribe").show();
});
$( "#subscribe-bcak" ).click(function() {
    $("#form-login").show();
    $("#form-subscribe").hide();
});

var currentLocation = window.location.pathname;
if (currentLocation === '/index') {
    $("#user").addClass("active");
    $("#user-none").show();
    /* removeClass */
    $("#home").removeClass("active");
    $("#mainPage-none").hide();
    
    $('#clickOffcanvas').trigger('click');
}
/* เสร็จให้ ลบ  */
if (currentLocation === '/home') {
    $("#user").addClass("active");
    $("#user-none").show();
    /* removeClass */
    $("#home").removeClass("active");
    $("#mainPage-none").hide();
}
/* สิ้นสุด */
function functionCopy() {
    let copy = document.getElementById("codeCopy").innerHTML;

    navigator.clipboard.writeText(copy);
    let textValue = `<button type="button" class="btn btn-outline-light">คัดลอกเเล้ว</button>`;
     document.getElementById('idCopy').innerHTML = textValue;

    setTimeout(() => {
        let text = `<button type="button" class="btn btn-outline-light">คัดลอก</button>`;
        document.getElementById('idCopy').innerHTML = text;
    }, 1000); 
}



$( "#newCode" ).click(function() {
    const n = 999999999 - 100000000  + 1;
    let result = Math.floor(Math.random() * n) + 100000000;
    document.getElementById('inputCode').value = result;
});

$( "#flexSwitchCheckChecked" ).click(function() {
    let value = document.getElementById("flexSwitchCheckChecked").checked;
    if (value  === true) {
        document.getElementById('textSwitch').innerHTML = "เปิดใช้งาน";
        
    }else{
        document.getElementById('textSwitch').innerHTML = "ปิดใช้งาน";
    }
});

function functionDestroy(e) {
    jQuery.ajax({
        url: '/gatAjax',
        method: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            id: e,
            },
        success: function(result){
            let id = result.id;
            let code = result.code;
            let enrol = result.enrol;  
            let percent = result.percent;  
            document.getElementById('codeCopy').innerHTML = code;
            document.getElementById('typeEnrol').innerHTML = enrol;
            document.getElementById('percentAtive').innerHTML = percent;
            document.getElementById('destroyId').value = id;
            $('#onClickOffcanvasBottom1').trigger('click');
                     
            },
        error: function(result){
        }      
    });  
}
$( "#destroyId" ).click(function() {

    if(confirm()){
     let id =  document.getElementById('destroyId').value;
     jQuery.ajax({
        url: `/gatDestroy/${id}`,
        method: 'get',
        data: {
            "_token": "{{ csrf_token() }}",
            },
        success: function(result){
            window.location.reload(true);
                     
            },
        error: function(result){
        }      
    }); 

    }
});

var locationLogin = window.location.pathname;


if (currentLocation === '/login') {
        $('#onClickRegister').trigger('click');
        $("#home").addClass("active");
        $("#location").removeClass("active");
        $("#gift").removeClass("active");
        $("#user").removeClass("active");
        $("#mainPage-none").show();
        $("#form-login").show();
        $("#form-subscribe").hide();
        document.getElementById('messageError').innerHTML = "Username เเละ Password  ไม่ถูกต้อง";
        
} 
$( function() {
    $( ".datepicker" ).datepicker();
  });

var currentLocation = window.location.pathname;
if (currentLocation === '/user') {
        window.onload = (event) => {
                    $("#user").addClass("active");
                    $("#user-none").show();
                    $("#home").removeClass("active");
                    $("#mainPage-none").hide();
    
            console.log('window.onload');
        };
}


$( "#reload").click(function() {

var currentLocation = window.location.pathname;
    if (currentLocation) {
        window.onload = (event) => {
                    $("#user").addClass("active");
                    $("#user-none").show();
                    $("#home").removeClass("active");
                    $("#mainPage-none").hide();
    
            console.log('window.onload');
        };
    }

/* 
  jQuery.ajax({
        url: `/reload-money`,
        method: 'get',
        data: {
            "_token": "{{ csrf_token() }}",
            },
        success: function(result){
            let modey = result[0].money;
            let spant = `<span>ยอกเงิน ฿ &nbsp;<i class="fa-solid fa-arrow-rotate-right" id="reload"></i>&nbsp;&nbsp;</span></p>`;
            let text = `<p  class="text span">${modey} ${spant}`;
            document.getElementById('modeyUser').innerHTML = modey;
                    
            },
        error: function(result){
        }      
    });   */
});

</script>
