$(document).ready(function() {

    $("#c2").hide(),
        $("#c3").hide();
    $("#c1").show();
    $("#ins").click(function() {
        $("#c2").hide();
        $("#c3").show();
        $("#c1").hide();
    });
    $("#oublier").click(function() {
        $('#c2').show();
        $("#c3").hide();
        $("#c1").hide();
    });



});

$("#bd").hide();
$("#submit").click(function() {

    if ($("#int1").val() == "") {
        $("#bd").show();
        $(function() {
            function show_popup() {
                $("#bd").slideUp();
            };
            setTimeout(show_popup, 5000); // 5 seconds
        })
    }
});