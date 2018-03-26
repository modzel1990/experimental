var u;

function formchoice(y) {
   u = y;
 };

$(function () {

  // contact form animations
  $('.contact').click(function () {
    $('#contactForm'+u).fadeIn();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm"+u);

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

});
