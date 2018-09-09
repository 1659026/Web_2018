<?php
include 'includes/head.php';
include 'includes/nav.php'
?>

    <div class="container">
      <div class="jumbotron">
          <h1>Hello, world!</h1>
          <p></p>
      </div>
    </div>
    <!-- Footer -->
    <div class="container">
<a href="#" class="to-top"><img src="images/Uptotop.png" id = "sroll" alt=""></a>
    </div>
    <style>
    .to-top {
    	position: fixed;
    	bottom: 300px;
    	right: 20px;
    	text-decoration: none;
      opacity: 0.4;
    	padding: 10px 20px;
    	display: none;
    }
    .to-top:hover{
    opacity: 1;
    }
    </style>

<?php
 include 'includes/healtheworld.php';
 include 'includes/footer.php'
 ?>
<script>
	jQuery(document).ready(function() {
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 200) {
				jQuery('.to-top').fadeIn(duration);
			} else {
				jQuery('.to-top').fadeOut(duration);
			}
		});

		jQuery('.to-top').click(function(event) {
			event.preventDefault();
			jQuery('html').animate({scrollTop: 0}, duration);
			return false;
		})
	});
</script>
