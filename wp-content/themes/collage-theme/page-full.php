<?php
/*
	Template Name: Full Page, No Sidebar
*/
get_header();  ?>
<div class="main">
	<div class="container">
		<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h2>Online HRIS Software, built for Law Firms and Legal Offices</h2>
				<?php the_content(); ?>
			<?php endwhile; // end the loop?>
	</div> <!-- /.container -->
</div> <!-- /.main -->
<?php get_footer(); ?>