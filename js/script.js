$(document).ready(function () {

    $("#next1").click(function () {
        $("#form1").hide();
        $("#form2").show();
    });

    $("#next2").click(function () {
        $("#form2").hide();
        $("#form3").show();
    });
    $("#back1").click(function () {
        $("#form2").hide();
        $("#form1").show();
    });

    $("#next3").click(function () {
        $("#form3").hide();
        $("#form4").show();
    });
    $("#back2").click(function () {
        $("#form3").hide();
        $("#form2").show();
    });

    $("#back3").click(function () {
        $("#form4").hide();
        $("#form3").show();
    });

    $("#industry-account").click(function () {
        $("#career-login").hide();
        $("#industry-account").css('opacity', '0.1');
        $("#industry-account").css('transition', '1s');
        $("#i-signup").show();
    });

    $(".intern1_6_supervisor_phone").on('change', function () {
        let number = $(this).val();
        number = number.replace(/(\d{3})(\d{3})(\d{4})/, "($1)$2-$3");
        $(this).val(number)
    });

});
