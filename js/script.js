$(document).ready(function(){

  $("#next").click(function(){
    $("#form1").hide();
    $("#form2").show();
  });
  $("#back").click(function(){
    $("#form2").hide();
    $("#form1").show();
  });

  $("#industry-account").click(function(){
    $("#career-login").hide();
    $("#industry-account").css('opacity', '0.1');
    $("#industry-account").css('transition','1s');
    $("#i-signup").show();
  });

});
