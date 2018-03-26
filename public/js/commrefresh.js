$(document).ready(function(){
  // alert("jquery is working!");

  $('#submit').on('click', function(e){
    e.preventDefault();
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      var firstname = $("input[name=firstname]").val();
      var surname = $("input[name=surname]").val();
      var email = $("input[name=email]").val();
      var comment = $("textarea#comment").val();
      $.ajax({
          url: "insert/post", 
          type: "POST",
          async: true,
          data: {
              firstname : firstname,
              surname : surname,
              email : email,
              comment : comment,
          },

      })
      .done(function() {
          setTimeout(function(){$('#success').fadeIn();}, 100);
          document.getElementById("success").innerHTML = "Your comment was added!";
          setTimeout(function(){$('#success').fadeOut();}, 3000);
        $.ajax({
            url: "insert/inserting", 
            type: "POST",
            async: true,
            data: {},
        })
        .done(function() {
            $("#comarea").load("/insert #comarea > *");
            $('.mine')[0].reset(); 
            });
        }, 1000);
        console.log("Data sent");
      });

  });





/* function loadDB() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("comment").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "some_text.txt", true);
    xhttp.send();
  }
  */
