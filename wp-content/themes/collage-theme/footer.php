<footer>
	<div class="container">
		<div class="clearfix my4 py3">
			<div class="col-12 center">
				<!-- added a h3 element here -->
				<h3 class="blue center"><?php the_field('headline_footer') ?></h3>
				<!-- added a button element here -->
				<a href="#"><button class="btn"><?php the_field('btn_footer') ?></button></a>
			</div>
		</div>
		<nav class="footer-nav border-top-blue clearfix py3 col-12 relative full-width">
			<div class="clearfix">
				<!-- align left -->
				<div class="logo"><!--logoFooter-->
					<?php $logoFooter = get_field('logo_header'); 
					?>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img  class="collage-logo" src="<?php echo $logoFooter['url'] ?>" alt="collage-logo" /></a>
				</div><!--logoFooter-->
				<!-- align left -->
				<!-- align right -->
				<div class="footer-nav-links">
					<?php wp_nav_menu( array(
						'container' => false,
						'theme_location' => 'primary'
					)); ?>
				</div>
				<!-- align right -->
			</div>
		</nav>
	</div>
</footer>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script>
	// scripts.js, plugins.js and jquery are enqueued in functions.php
	/* Google Analytics! */
	var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<?php wp_footer(); ?>
</body>
</html>