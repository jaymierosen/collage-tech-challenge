<?php
/*
	Template Name: Full Page, No Sidebar
*/
?>
<?php get_header();  ?>
<main><!-- main -->
	<div class="page-container">
			<div class="py3 companies">
			<!-- companies -->
			<div class="container">
				<div class="clearfix mt3 sm-hide-below">
					<!-- got rid of a lot of unncessary divs here -->
					<h4 class="blue center"><?php the_field('headline_companies'); ?></h4>
					<ul class="center">
						<?php $logoWealthsimple = get_field('logo_wealthsimple'); ?>
						<li class="inline-block px1"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img class="company-logo" src="<?php echo $logoWealthsimple['url'] ?>" alt="Wealthsimple logo" /></a></li>
						<?php $logoPurCompany = get_field('logo_pur_company'); ?>
						<li class="inline-block px1"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img class="company-logo" src="<?php echo $logoPurCompany['url'] ?>" alt="collage-logo" /></a></li>
						<?php $logoTalentMinded = get_field('logo_talent_minded'); ?>
						<li class="inline-block px1below"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img class="company-logo" src="<?php echo $logoTalentMinded['url'] ?>" alt="collage-logo" /></a></li>
						<?php $logoNarcity = get_field('logo_narcity'); ?>
						<li class="inline-block px1"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img class="company-logo" src="<?php echo $logoNarcity['url'] ?>" alt="collage-logo" /></a></li>
						<?php $logoSweetTooth = get_field('logo_sweet_tooth'); ?>
						<li class="inline-block px1below"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img class="company-logo" src="<?php echo $logoSweetTooth['url'] ?>" alt="collage-logo" /></a></li>
					</ul>
				</div>
			</div>
			<!-- companies -->
		</div>
		<div class="container"> <!-- container -->
			<div class="content"> <!-- content -->
				<!-- hr tools -->
				<section class="tools">
					<div class="clearfix my3 py1">
						<h3 class="center"><?php the_field('headline_tools'); ?></h3>
						<p class="center"><?php the_field('txt_tools'); ?></p>
					</div>
					<div class="clearfix full-width sm-mt4">
						<?php $imgEmployeeRecordsBanner = get_field('img_employee_records_banner'); ?>
						<div class="img-employee-records-banner sm-block table-cell align-middle"><img src="<?php echo $imgEmployeeRecordsBanner['url'] ?>" class="fit mb3" width="770" alt=""/></div>
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
					<?php $img_bg_testimonial_1 = get_field('img_bg_testimonial_1'); ?>
					<?php $img_bg_testimonial_2 = get_field('img_bg_testimonial_2'); ?>
					<?php $img_bg_testimonial_3 = get_field('img_bg_testimonial_3'); ?>
					<!-- slider gallery -->
					<!-- Flickity HTML init -->
					<h3 class="center">Testimonials</h3>
					<div class="carousel"
  data-flickity='{ "percentPosition": false, "wrapAround": true, "imagesLoad": true }'>
						<div class="carousel-cell">
							<div class="blockquote-container">
								<blockquote class="testimonial"><?php the_field('txt_testimonial_1') ?></blockquote>
								<?php $img_testimonial_cite_1 = get_field('img_testimonial_cite_1') ?>
								<div class="table mt2">
									<div class="img-testimonial-cite-container">
										<img class="img-testimonial-cite" src="<?php echo $img_testimonial_cite_1['url'] ?>" alt="">
									</div>
									<div class="txt-testimonial-cite-container">
										<cite class="white"><?php the_field('txt_testimonial_cite_1') ?></cite>
										<h6 class="white"><?php the_field('txt_testimonial_cite_title_1') ?></h6>
									</div>
								</div>
							</div>
							<img src="<?php echo $img_bg_testimonial_1['url'] ?>" alt="">
						</div>
						<div class="carousel-cell">
							<div class="blockquote-container">
								<blockquote class="testimonial"><?php the_field('txt_testimonial_2') ?></blockquote>
								<?php $img_testimonial_cite_2 = get_field('img_testimonial_cite_2') ?>
								<div class="table mt2">
									<div class="img-testimonial-cite-container">
										<img class="img-testimonial-cite" src="<?php echo $img_testimonial_cite_2['url'] ?>" alt="">
									</div>
									<div class="txt-testimonial-cite-container">
										<cite class="white"><?php the_field('txt_testimonial_cite_2') ?></cite>
										<h6 class="white"><?php the_field('txt_testimonial_cite_title_2') ?></h6>
									</div>
								</div>
							</div>
							<img src="<?php echo $img_bg_testimonial_2['url'] ?>" alt="">
						</div>
						<div class="carousel-cell">
							<div class="blockquote-container">
								<blockquote class="testimonial"><?php the_field('txt_testimonial_3') ?></blockquote>
								<?php $img_testimonial_cite_3 = get_field('img_testimonial_cite_3') ?>
								<div class="table mt2 clearfix">
									<div class="img-testimonial-cite-container">
										<img class="img-testimonial-cite" src="<?php echo $img_testimonial_cite_3['url'] ?>" alt="">
									</div>
									<div class="txt-testimonial-cite-container">
										<cite class="white"><?php the_field('txt_testimonial_cite_3') ?></cite>
										<h6 class="white"><?php the_field('txt_testimonial_cite_title_3') ?></h6>
									</div>
								</div>
							</div>
							<img src="<?php echo $img_bg_testimonial_3['url'] ?>" alt="">
						</div>
					</div>
					<!-- slider gallery -->
				</section>
				<!-- testimonials -->
			</div> <!-- content -->
		</div> <!-- container -->
	</div><!-- page container -->
</main> <!-- main -->
<?php get_footer(); ?>