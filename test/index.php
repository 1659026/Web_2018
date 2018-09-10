<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style media="screen">
.multi-item-carousel{
.carousel-inner{
  > .item{
    transition: 500ms ease-in-out left;
  }
  .active{
    &.left{
      left:-33%;
    }
    &.right{
      left:33%;
    }
  }
  .next{
    left: 33%;
  }
  .prev{
    left: -55%;
  }
  @media all and (transform-3d), (-webkit-transform-3d) {
    > .item{
      // use your favourite prefixer here
      transition: 500ms ease-in-out left;
      transition: 500ms ease-in-out all;
      backface-visibility: visible;
      transform: none!important;
    }
  }
}
.carouse-control{
  &.left, &.right{
    background-image: none;

  }
}
}

.carousel-control {
    position: absolute;
    top: 0;
    bottom: 0px;
    left: -200px;
    width: 15%;
    font-size: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    filter: alpha(opacity=50);
    opacity: .5;
}

a.right.carousel-control {
    right: -200px;
}

// non-related styling:
body{
background: #333;
color: #ddd;
}
h1{
color: white;
font-size: 2.25em;
text-align: center;
margin-top: 1em;

margin-bottom: 2em;
text-shadow: 0px 2px 0px rgba(0, 0, 0, 1);
}
</style>

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-2"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-2"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-2"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-2"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-2"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-2"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-2"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
              </div>

              <!--  Example item end -->
            </div>
            <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    // Instantiate the Bootstrap carousel
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
    console.log(next);
  });

}
next.children(':first-child').clone().appendTo($(this));

if (next.next().length>0) {
  next.next().children(':first-child').clone().appendTo($(this));
} else {
  $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
}
});
    </script>
  </body>
</html>
