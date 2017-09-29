<?php
/*
	Template Name: Full Page, No Sidebar
*/
?>
<?php get_header();  ?>
<main><!-- main -->
	<div class="page-container">
		<div class="container"> <!-- container -->
			<div class="content"> <!-- content -->
				<!-- hr tools -->
				<section class="tools">
					<div class="clearfix my3 py1">
						<h3 class="center"><?php the_field('headline_tools'); ?></h3>
						<p class="center">Look more professional, run better programs, and integrate new employees more effectively with Collage. Automate and eliminate tedious HR administration so that you and your team can spend time on more productive work.</p>
					</div>
					<div class="table clearfix full-width sm-mt4">
						<div class="sm-block table-cell align-middle col-12 sm-col-6 md-col-7 lg-col-8 xs-px0 px2"><img src="#" class="fit mb3" width="770" alt="asset goes here"/></div>
						<ul class="list-reset">
							<li>List Reset</li>
							<li>Removes bullets</li>
							<li>Removes numbers</li>
							<li>Removes padding</li>
						</ul>
					</div>
				</section>
				<!-- hr tools -->
				<!-- achieve, save and reduce  -->
				<section class="goals border-top-gray">
					<div class="container">
						<div class="container clearfix center">
							<div class="col-12 mx-auto">
								<div class="col col-12 md-col-4 my2 px2"><img src="" height="70px" class="mb2 sm-mb0" alt="hr outcomes"/>
									<div class="max-width-1 mx-auto">
										<h6 class="midnight">Achieve better HR outcomes</h6>
										<p class="small">Look more professional, run better programs, integrate new employees more effectively and make strategic decisions using HR data.</p>
									</div>
								</div>
								<div class="col col-12 md-col-4 my2 px2"><img src="" height="70px" class="mb2 sm-mb0" alt="hr savings"/>
									<div class="max-width-1 mx-auto">
										<h6 class="midnight">Save time and money</h6>
										<p class="small">Automate and eliminate tedious HR administration so that you and your team can spend time on more productive work.</p>
									</div>
								</div>
								<div class="col col-12 md-col-4 my2 px2"><img src="" height="70px" class="mb2 sm-mb0" alt="hr risk"/>
									<div class="max-width-1 mx-auto">
										<h6 class="midnight">Reduce company risk</h6>
										<p class="small">Reduce your risk of non-compliance and eliminate costly errors that can lead to unnecessary financial or legal liability.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- achieve, save and reduce  -->
				<!-- testimonials -->
				<section class="testimonials">
					<?php // Start the loop ?>
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
					<?php endwhile; // end the loop?>
				</section>
				<!-- testimonials -->
			</div> <!-- content -->
		</div> <!-- container -->
	</div><!-- page container -->
</main> <!-- main -->
<?php get_footer(); ?>