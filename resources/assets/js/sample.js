$( function ()
{
    console.log('run2');
} )


$('#tab1_button').on('click', function () {
    console.log('tab1');
    if ($("#tab1_button").hasClass("tab-active")) {

    } else {
    
        $("#tab2").hide();
        $("#tab2_button").removeClass("tab-active");
        $("#tab3").hide();
        $("#tab3_button").removeClass("tab-active");
        $("#tab4").hide();
        $("#tab4_button").removeClass("tab-active");
        $("#tab5").hide();
        $("#tab5_button").removeClass("tab-active");
    
        $("#tab1").fadeIn();
        $("#tab1_button").addClass("tab-active");
    }
});

$('#tab2_button').on('click', function () {
    console.log('tab2');
    if ($("#tab2_button").hasClass("tab-active")) {

    } else {
    
        $("#tab1").hide();
        $("#tab1_button").removeClass("tab-active");
        $("#tab3").hide();
        $("#tab3_button").removeClass("tab-active");
        $("#tab4").hide();
        $("#tab4_button").removeClass("tab-active");
        $("#tab5").hide();
        $("#tab5_button").removeClass("tab-active");
    
        $("#tab2").fadeIn();
        $("#tab2_button").addClass("tab-active");
    }
});



$('#tab3_button').on('click', function () {
    console.log('tab3');
    if ($("#tab3_button").hasClass("tab-active")) {

    } else {
    
        $("#tab1").hide();
        $("#tab1_button").removeClass("tab-active");
        $("#tab2").hide();
        $("#tab2_button").removeClass("tab-active");
        $("#tab4").hide();
        $("#tab4_button").removeClass("tab-active");
        $("#tab5").hide();
        $("#tab5_button").removeClass("tab-active");
    
        $("#tab3").fadeIn();
        $("#tab3_button").addClass("tab-active");
    }
});

$('#tab4_button').on('click', function () {
    console.log('tab4');
    if ($("#tab4_button").hasClass("tab-active")) {

    } else {
    
        $("#tab1").hide();
        $("#tab1_button").removeClass("tab-active");
        $("#tab2").hide();
        $("#tab2_button").removeClass("tab-active");
        $("#tab3").hide();
        $("#tab3_button").removeClass("tab-active");
        $("#tab5").hide();
        $("#tab5_button").removeClass("tab-active");
    
        $("#tab4").fadeIn();
        $("#tab4_button").addClass("tab-active");
    }
});

$('#tab5_button').on('click', function () {
    console.log('tab5');
    if ($("#tab5_button").hasClass("tab-active")) {

    } else {
    
        $("#tab1").hide();
        $("#tab1_button").removeClass("tab-active");
        $("#tab2").hide();
        $("#tab2_button").removeClass("tab-active");
        $("#tab3").hide();
        $("#tab3_button").removeClass("tab-active");
        $("#tab4").hide();
        $("#tab4_button").removeClass("tab-active");
    
        $("#tab5").fadeIn();
        $("#tab5_button").addClass("tab-active");
    }
});