<?php
include 'includes/head.php';
include 'includes/nav.php'
?>

<div class="container-fluid">
  <div class="mast_carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" id = "mast_carousel">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/carousel/banner-brevetti.png" alt="...">
            </div>
            <div class="item">
                <img src="images/carousel/banner-america.png" alt="...">
            </div>
            <div class="item">
                <img src="images/carousel/banner-brevetti-2.png" alt="...">
            </div>
            <div class="item">
                <img src="images/carousel/banner-china.png" alt="...">
            </div>
            <div class="item">
                <img src="images/carousel/banner-EU.png" alt="...">
            </div>
            <div class="item">
                <img src="images/carousel/banner-india.png" alt="...">
            </div>
            <div class="item">
                <img src="images/carousel/banner-japan.png" alt="...">
            </div>
            <div class="item">
                <img src="images/carousel/banner-korea.png" alt="...">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-menu-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-menu-right"></span>
        </a>
    </div>
  </div>
</div><!--//container -->
    <!-- Footer -->


<?php
 include 'includes/healtheworld.php';
 include 'includes/footer.php'
 ?>
