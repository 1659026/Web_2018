//append load div to body
$('body').append('<div id="load"><img src="images/spinner.gif"></div>');
//remove load div when page is loaded
$(window).load(function () {
  $('#load').fadeOut();
});
$(document).ready(function() {
  $("li.dropdown").each(function(){
    $(this).click(function() {
      var x = $(this).outerWidth();
      console.log(x);
      $(".dropdown-menu").css("width", x);
    })
  })

  $("#apply").click(function() {
    /* Act on the event */
    $(".signin").hide();
    $(".signup").fadeIn(500);
  });

  $("#login").click(function() {
    /* Act on the event */
    $(".signin").fadeIn(500);
    $(".signup").hide();
  });



  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

});
