//append load div to body
$('body').append('<div id="load"><img src="images/spinner.gif"></div>');
//remove load div when page is loaded
$(window).load(function () {
  $('#load').fadeOut();
});
$(document).ready(function() {



  jQuery('.to-top').click(function(event) {
    event.preventDefault();
    jQuery('html').animate({scrollTop: 0}, duration);
    return false;
  });

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


  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

});

$('#cty').click(function(){
  console.log("a");
  $('.cty-content').css({'display': 'block'}).hide().fadeIn(600);
  $('.ceo-content, .dtac-content').hide();
  $('#gt2, #bread-ceo, #bread-dtac').css({'display': 'none'});
  $('#gt1, #bread-cty').css({'display': 'inline-block'});
});
$('#ceo').click(function(){
  $('.cty-content, .dtac-content').hide();
  $('.ceo-content').css({'display': 'block'}).hide().fadeIn(600);
  $('#gt2, #bread-cty, #bread-dtac').css({'display': 'none'});
  $('#gt1, #bread-ceo').css({'display': 'inline-block'});
});
$('#dtac').click(function(){
  $('.cty-content, .ceo-content').hide();
  $('.dtac-content').css({'display': 'block'}).hide().fadeIn(600);
  $('#gt2, #bread-ceo, #bread-cty').css({'display': 'none'});
  $('#gt1, #bread-dtac').css({'display': 'inline-block'});
});

var duration = 500;
jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > 200) {
    jQuery('.to-top').fadeIn(duration);
  } else {
    jQuery('.to-top').fadeOut(duration);
  }
});

});

  //Multiple-carousel
  $('.multi-item-carousel').carousel({
    interval: false
  });

  // for every slide in carousel, copy the next slide's item in the slide.
  // Do the same for the next, next item.
  $('.multi-item-carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
      $('.left, .right').click(function(){
      });

    }
    next.children(':first-child').clone().appendTo($(this));
    var next2 = $(this).siblings(':first');
    var x = 1;

    if (next.next().length>0) {
      next.next().children(':first-child').clone().appendTo($(this));
      } else {
      if (x == 1) {
       next2.children(':first-child').clone().appendTo($(this));
      } else if (x == 2) {
       next2.next().children(':first-child').clone().appendTo($(this));
      } else if (x == 3){
       next2.next().next().children(':first-child').clone().appendTo($(this));
      } else {
       next2.next().next().next().children(':first-child').clone().appendTo($(this));
      }
      x++;
    }

    next = next.next();

    if (next.next().length>0) {
      next.next().children(':first-child').clone().appendTo($(this));
      } else {
      if (x == 1) {
       next2.children(':first-child').clone().appendTo($(this));
      } else if (x == 2) {
       next2.next().children(':first-child').clone().appendTo($(this));
      } else if (x == 3){
       next2.next().next().children(':first-child').clone().appendTo($(this));
      } else {
       next2.next().next().next().children(':first-child').clone().appendTo($(this));
      }
      x++;
    }
    next = next.next();

    if (next.next().length>0) {
      next.next().children(':first-child').clone().appendTo($(this));
      } else {
      if (x == 1) {
       next2.children(':first-child').clone().appendTo($(this));
      } else if (x == 2) {
       next2.next().children(':first-child').clone().appendTo($(this));
      } else if (x == 3){
       next2.next().next().children(':first-child').clone().appendTo($(this));
      } else {
       next2.next().next().next().children(':first-child').clone().appendTo($(this));
      }
      x++;
    }

    next = next.next();

    if (next.next().length>0) {
      next.next().children(':first-child').clone().appendTo($(this));
      } else {
      if (x == 1) {
       next2.children(':first-child').clone().appendTo($(this));
      } else if (x == 2) {
       next2.next().children(':first-child').clone().appendTo($(this));
      } else if (x == 3){
       next2.next().next().children(':first-child').clone().appendTo($(this));
      } else {
       next2.next().next().next().children(':first-child').clone().appendTo($(this));
      }
      x++;
    }
  });
