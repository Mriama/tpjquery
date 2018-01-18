$(document).ready(function() {

    $("#c2").hide(),
        $("#c3").hide();
    $("#c1").show();
    $("#ins").click(function() {
        $("#c2").hide();
        $("#c3").show();
        $("#c1").hide();
        $(".erreur").hide();
    });
    $("#oublier").click(function() {
        $('#c2').show();
        $("#c3").hide();
        $("#c1").hide();

    });


    $("#submiterreur").hide();
    $("#oublierreur").hide();


    function champObligatoire(champ) {
        if (champ.val() == "") {
            return "Veillez Remplir le " + champ.attr("val-champ");
        } else
            return "";
    }


    // $('.etape_2').click(function() {
    //     $("#submiterreur").show();
    //     $("#oublierreur").show();
    //     $(".erreur").show();
    //     idform = $(this).attr("idform");
    //     idalert = $(this).attr("idalert");
    //     var champs = $("#f1" + "#f2" + "#f3 input:text,#f1" + "#f2" + "#f3 input:password");
    //     $.each(champs, function() {
    //         var error = (champObligatoire($(this)));
    //         if (error != "")
    //             $("#submiterreur" + "#oublierreur" + ".erreur ul").append("<li>" + error + "</li>");
    //         // $(".erreur ul li").css("color", "black");
    //     });
    // });







    // $('#submit').click(function() {
    //     $("#submiterreur").show();
    //     var champs = $("#f1 input:text,#f1 input:password");
    //     $.each(champs, function() {
    //         var error = (champObligatoire($(this)));
    //         if (error != "")
    //             $("#submiterreur ul").append("<li>" + error + "</li>");
    //         $("#submiterreur ul li").css("color", "black");
    //     });
    // });

    // $('#oublie').click(function() {
    //     $("#oublierreur").show();
    //     var champs = $("#f2 input:text,#f2 input:password");
    //     $.each(champs, function() {
    //         var error = (champObligatoire($(this)));
    //         if (error != "")
    //             $("#oublierreur ul").append("<li>" + error + "</li>");
    //         $("#oublierreur ul li").css("color", "black");
    //     });
    // });

    // $('.etape_2').click(function() {
    //     $("#erreur").show();
    //     var champs = $("#f3 input:text,#f3 input:password");
    //     $.each(champs, function() {
    //         var error = (champObligatoire($(this)));
    //         if (error != "")
    //             $("#erreur ul").append("<li>" + error + "</li>");
    //         $("#erreur ul li").css("color", "black");
    //     });
    // });

    // $(".errorr").hide();

    $("#int1").keyup(function() {
        if (!$("#int1").val().match(/^[a-z0-9]+$/i)) {
            $("#int1").next(".errorr").show().text("veullez remplir un login correct");
        } else {
            $("#int1").next(".errorr").hide().text("");
        }
    });

    $("#int3").keyup(function() {
        if (!$("#int3").val().match(/^[a-z0-9]+$/i)) {
            $("#int3").next(".errorr").show().text("veullez remplir un login correct");
        } else {
            $("#int3").next(".errorr").hide().text("");
        }
    });

    $("#int5").keyup(function() {
        if (!$("#int5").val().match(/^[a-z0-9]+$/i)) {
            $("#int5").next(".errorr").show().text("veullez remplir un login correct");
        } else {
            $("#int5").next(".errorr").hide().text("");
        }
    });

    // function inscription() {
    //     var tabuser = {
    //         nom: "",
    //         prenom: "",
    //         login: "",
    //         password: ""
    //     }
    // };
    $("#button").on("click", function() {

        $('#c1').hide();
        $('#charge').load('accueil.php').fadeIn();
        return false;
    });


    $("#btn-ins").on("click", function() {
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var login = $("#log").val();
        var pwd = $("#pwd").val();


        $.ajax({
            url: "userinsert.php",
            type: "post",
            data: { nom: nom, prenom: prenom, log: login, pwd: pwd },
            datatype: "txt"
        });
    });

});