<?php get_header();  ?>
<div class="main"><!-- main -->
	<div class="container"> <!-- container -->
		<div class="content"> <!-- content -->
			<div class="tools">
				<!-- TOOLS START -->
				<?php // Start the loop ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile; // end the loop?>
				<div class="clearfix my3 py1">
					<h3 class="center"><?php the_field('headline_tools'); ?></h3>
					<p class="center gray"><?php the_field('txt_tools'); ?></p>
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
			</div>
			<!-- TOOLS END -->
			<!-- ACHIEVE, SAVE AND REDUCE START -->
			<section class="goals">
				<div class="container my4 clearfix center">
					<div class="col-12 mx-auto">
						<?php $iconAchieve = get_field('icon_achieve'); ?>
						<div class="col col-12 md-col-4 my2 px2"><img src="<?php echo $iconAchieve['url'] ?>" alt="" />
							<div class="max-width-1 mx-auto">
								<h6 class="midnight"><?php the_field('headline_goal_1'); ?></h6>
								<h3 class="gray">Look more professional, run better programs, integrate new employees more effectively and make strategic decisions using HR data.</h3>
							</div>
						</div>
						<?php $iconSaveTime = get_field('icon_save_time'); ?>
						<div class="col col-12 md-col-4 my2 px2"><img src="<?php echo $iconSaveTime['url'] ?>" alt="" />
							<div class="max-width-1 mx-auto">
								<h6 class="midnight">Save time and money</h6>
								<h3 class="gray">Automate and eliminate tedious HR administration so that you and your team can spend time on more productive work.</h3>
							</div>
						</div>
						<?php $iconRisk = get_field('icon_risk'); ?>
						<div class="col col-12 md-col-4 my2 px2"><img src="<?php echo $iconRisk['url'] ?>" alt="" />
							<div class="max-width-1 mx-auto">
								<h6 class="midnight">Reduce company risk</h6>
								<h3 class="gray">Reduce your risk of non-compliance and eliminate costly errors that can lead to unnecessary financial or legal liability.</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ACHIEVE, SAVE AND REDUCE END -->
		</div> <!-- content -->
	</div> <!-- container -->
</div> <!-- main -->
<?php get_footer(); ?>