$(document).ready(function(){
    $( ".dropdown1" ).hover(function() {

            $(".navbar-nav").css("background-color","white");
            $(".navbar").css("background-color","white");

        },
        function() {

            $(".navbar-nav").css("background-color","");
            $(".navbar").css("background-color","");

        });
    $( ".mobilLabel" ).click(function() {

        var x=document.getElementById("nav").style.backgroundColor;

        if(x === "white")
            $('#nav').css("background-color","transparent");

        else
            $('#nav').css("background-color","white");


    });
     $( ".searchClick" ).click(function() {
        $(".closeSearch").css("display","block");
        $(".width100v2").css("display","block");
        $(".closeSearch").css("position","absolute");
        $(".closeSearch").css("top","10px");
        $(".closeSearch").css("right","10px");
        $(".closeSearch").css("padding","10px");
        $(".width100v3").fadeIn();
        $(".header-bg").css("background-color","white");
        $(".indexHeaderbg").css("background-color","transparent");
        $(".forgotHeight").css("padding-top","54px");
        $(".searchPadding").css("padding-top","54px");
    });


     $( ".closeSearch" ).click(function() {
         $(".closeSearch").css("display","none");
         $(".width100v2").css("display","none");
         $(".width100v3").fadeOut();
         $(".forgotHeight").css("padding-top","0px");
         $(".searchPadding").css("padding-top","0px");

     });

});


$(window).scroll(function () {
    if($(this).scrollTop() > 150) {
        $('header').addClass('stick');
    } else {
        $('header').removeClass('stick');
    }

    if($(this).scrollTop() > 150) {
        $('.productTitleSmall').css({
            'display': "block"
        });
    } else {
        $('.productTitleSmall').css({
            'display': "none"
        });
    }
});

$(document).ready(function(){
    $( ".sepet-icon" ).mouseover(function() {
        $(".basket-active").fadeIn();

    });
});

$(document).ready(function(){
    $( ".openForm" ).click(function() {
        $(".diffAddress").css("display","block");
    });
});

$(document).ready(function(){
    $( ".billingBorder" ).click(function() {
        $(".diffAddress").css("display","none");
    });
});
$(document).ready(function(){
    $( ".disableColor" ).click(function() {
        $(".stockArea").css("display","block");
    });
});



$(document).ready(function(){
    $(".closeX").click(function(){
        $(".basket-active").fadeOut();
    });


});

function checkdecrease(param,paramMobil){
    var value = parseInt(document.getElementById(param).value, 10);
    var valueMobil = parseInt(document.getElementById(paramMobil).value, 10);
    value = isNaN(value) ? 0 : value;
    value = (value <= 1) ? 1 : value;
    if(value!=1)
    {
        value--;
    }

    valueMobil = isNaN(value) ? 0 : valueMobil;
    valueMobil = (value <= 1) ? 1 : valueMobil;
    if(valueMobil != 1)
    {
        valueMobil--;
    }
    document.getElementById(param).value = value;
    document.getElementById(paramMobil).value = valueMobil;
}
function checkincrease(param,paramMobil){
    var value = parseInt(document.getElementById(param).value, 10);
    var valueMobil = parseInt(document.getElementById(paramMobil).value, 10);
    value = isNaN(value) ? 0 : value;
    value = (value <= 1) ? 1 : value;
    value++;
    valueMobil = isNaN(value) ? 0 : valueMobil;
    valueMobil = (value <= 1) ? 1 : valueMobil;
    valueMobil++;
    document.getElementById(paramMobil).value = valueMobil;
    document.getElementById(param).value = value;
}
function checkCartdecrease(param){
    var value = parseInt(document.getElementById(param).value, 10);
    value = isNaN(value) ? 0 : value;
    value = (value <= 1) ? 1 : value;
    if(value!=1)
    {
        value--;
    }
    document.getElementById(param).value = value;

}
function checkCartincrease(param){
    var value = parseInt(document.getElementById(param).value, 10);
    value = isNaN(value) ? 0 : value;
    value = (value <= 1) ? 1 : value;
    value++;
    document.getElementById(param).value = value;
}

function checkNumber(e)
{
    var keycode = window.event.keyCode;

    if((keycode>=48 && keycode<=57))
    {
        return true;
    }
    else
    {
        return false;
    }
}

$(document).ready(function(){
    $('#dateMMYY').mask('00/00');
});

