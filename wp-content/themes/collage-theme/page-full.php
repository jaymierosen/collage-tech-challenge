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
						<p class="center"><?php the_field('txt_tools'); ?></p>
					</div>
					<div class="table clearfix full-width sm-mt4">
						<?php $imgEmployeeRecordsBanner = get_field('img_employee_records_banner'); ?>
						<div class="sm-block table-cell align-middle"><img src="<?php echo $imgEmployeeRecordsBanner['url'] ?>" class="fit mb3" width="770" alt=""/></div>
						<div class="hr-tools-list">
							<ul class="list-reset">
								<?php $iconCheck = get_field('icon_check'); ?>
								<li><span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span><?php the_field('list_tools_item_1'); ?></li>
								<li><span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span><?php the_field('list_tools_item_2'); ?></li>
								<li><span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span><?php the_field('list_tools_item_3'); ?></li>
								<li><span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span><?php the_field('list_tools_item_4'); ?></li>
								<li><span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span><?php the_field('list_tools_item_5'); ?></li>
								<li><span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span><?php the_field('list_tools_item_6'); ?></li>
							</ul>
						</div>
					</div>
				</section>
				<!-- hr tools -->
				<!-- achieve, save and reduce  -->
				<section class="goals border-top-gray">
					<!-- <div class="container"> -->
						<div class="clearfix center">
							<div class="clearfix col-12 mx-auto">
								<?php $iconAchieve = get_field('icon_achieve'); ?>
								<div class="icon-goal clearfix col-12 col-3 md-col-4 my2 px2"><img src="<?php echo $iconAchieve['url'] ?>" alt="" />
									<div class="max-width-1 mx-auto">
										<h6 class="midnight"><?php the_field('headline_goal_1'); ?></h6>
										<p class="goal light-gray"><?php the_field('txt_goal_1'); ?></p>
									</div>
								</div>
								<?php $iconSaveTime = get_field('icon_save_time'); ?>
								<div class="icon-goal col-12 col-3 md-col-4 my2 px2"><img src="<?php echo $iconSaveTime['url'] ?>" alt="" />
									<div class="max-width-1 mx-auto">
										<h6 class="midnight"><?php the_field('headline_goal_2'); ?></h6>
										<p class="goal light-gray"><?php the_field('txt_goal_2'); ?></p>
									</div>
								</div>
								<?php $iconRisk = get_field('icon_risk'); ?>
								<div class="icon-goal col-3 col-12 md-col-4 my2 px2"><img src="<?php echo $iconRisk['url'] ?>" alt="" />
									<div class="max-width-1 mx-auto">
										<h6 class="midnight"><?php the_field('headline_goal_3'); ?></h6>
										<p class="goal light-gray"><?php the_field('txt_goal_3'); ?></p>
									</div>
								</div>
							</div>
						</div>
				<!-- 	</div> -->
				</section>
				<!-- achieve, save and reduce  -->
				<!-- testimonials -->
				<section class="testimonials">
					<?php $testimonial_1 = get_field('testimonial_1'); ?>
					<?php $testimonial_2 = get_field('testimonial_2'); ?>
					<?php $testimonial_3 = get_field('testimonial_3'); ?>
					<!-- slider gallery -->
					<!-- Flickity HTML init -->
					<div class="carousel"
  data-flickity='{ "percentPosition": false, "wrapAround": true, "imagesLoad": true }'>
						<div class="carousel-cell"><p>some text</p><img src="<?php echo $testimonial_1['url'] ?>" alt=""></div>
						<div class="carousel-cell"><p>some text</p><img src="<?php echo $testimonial_2['url'] ?>" alt=""></div>
						<div class="carousel-cell"><p>some text</p><img src="<?php echo $testimonial_3['url'] ?>" alt=""></div>
					</div>
					<!-- slider gallery -->
				</section>
				<!-- testimonials -->
			</div> <!-- content -->
		</div> <!-- container -->
	</div><!-- page container -->
</main> <!-- main -->
<?php get_footer(); ?>