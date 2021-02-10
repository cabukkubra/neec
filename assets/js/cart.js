$(document).ready(function(){
    $( ".dropdownx" ).mouseover(function() {

        $(".dropdown-menux").css("visibility","visible");

    });
});

$(document).ready(function(){
    $("button").click(function(){

        $(".dropdown-menux").css("visibility","hidden");

    });
});


