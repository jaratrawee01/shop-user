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
function functionCopy(e) {

    navigator.clipboard.writeText(e);
    let textValue = `<span style="color: blue">คัดลอกเเล้ว</span>`;
     document.getElementById(e).innerHTML = textValue;

    setTimeout(() => {
        let text = `<span style="color: white">คัดลอก</span>`;
        document.getElementById(e).innerHTML = text;
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

function functionDestroy() {

    console.log('e:',e);
    
}
function myFunction() {
    console.log('55555');
}


</script>