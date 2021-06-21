
$(function() {

  $(window).scroll(function(){
    if( $(window).scrollTop() > 0){
      $('body').addClass('scroll');
    }

    else{
      $('body').removeClass('scroll');
    }

  });

  $('#mainPage').addClass('popShow');

  $(".hd_pops_close").click(function(){

    $('#mainPage').removeClass('popShow');
  });

  $('.close_btn .xi-close').click(function(){
   $('#hd_pop').hide();
  });

});
