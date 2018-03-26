
    $(window).scroll(function() {
     if($(this).scrollTop() > 70)
      {
       $('.navcolor').addClass('op');
      }else{
        $('.navcolor').removeClass('op');
    }
});
