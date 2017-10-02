<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="icon" type="image/png" href="https://www.collage.co/wp-content/themes/collage/library/img/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="https://www.collage.co/wp-content/themes/collage/library/img/favicon-16x16.png" sizes="16x16">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- stylesheets should be enqueued in functions.php -->
	<meta name="description" content="All-in-one HRIS software to streamline HR management. Say goodbye to spreadsheets &amp; tedious paperwork by managing your employee data in the cloud."/>
	<meta name="robots" content="noindex,follow,noodp"/>
	<link rel="canonical" href="https://www.collage.co/lp/hris-software/" />
	<meta property="og:locale" content="en_CA" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Online HRIS Software | Free HRIS for Law Firms &amp; Legal Offices | CollageHR" />
	<meta property="og:description" content="All-in-one HRIS software to streamline HR management. Say goodbye to spreadsheets &amp; tedious paperwork by managing your employee data in the cloud." />
	<meta property="og:url" content="https://www.collage.co/lp/hris-software/" />
	<meta property="og:site_name" content="All-in-one HR Software for Law Firms &amp; Legal Offices | Collage" />
	<meta property="article:publisher" content="https://www.facebook.com/collagehr/" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="All-in-one HRIS software to streamline HR management. Say goodbye to spreadsheets &amp; tedious paperwork by managing your employee data in the cloud." />
	<meta name="twitter:title" content="Online HRIS Software | Free HRIS for Law Firms &amp; Legal Offices | CollageHR" />
	<meta name="twitter:site" content="@collagehr" />
	<meta name="twitter:creator" content="@collagehr" />
	<meta property="DC.date.issued" content="2017-06-08T12:07:39+00:00" />
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="page-container clearfix">
			<div class="container clearfix">
				<div class="hero">
					<div class="logo"><!--logoHeader-->
						<?php $logoHeader = get_field('logo_header'); ?>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img class="collage-logo" src="<?php echo $logoHeader['url'] ?>" alt="collage-logo" /></a>
					</div><!--logoHeader-->
					<div class="sm-pt2 sm-mt3 mt3">
						<div>
							<h2 class="gray"><?php the_field('headline_hero') ?></h2>
							<div class="h6 fw-l mt2 gray">
								<p class="hero-paragraph"><?php the_field('hero_paragraph'); ?></p>
							</div>
							<div class="mb1">
								<a href=""><button class="btn"><?php the_field('btn_hero'); ?></button></a>
							</div>
							<div class="col col-1">
								<ul>
									<?php $iconMonitor = get_field('icon_monitor'); ?>
									<?php $iconDatabase = get_field('icon_database'); ?>
									<?php $iconEmpower = get_field('icon_empower'); ?>
									<span class="icon"><img src="<?php echo $iconMonitor['url'] ?>" alt=""></span>
									<li><?php the_field('list_hero_item_1') ?></li>
									<span class="icon"><img src="<?php echo $iconDatabase['url'] ?>" alt=""></span>
									<li><?php the_field('list_hero_item_2') ?></li>
									<span class="icon"><img src="<?php echo $iconEmpower['url'] ?>" alt=""></span>
									<li><?php the_field('list_hero_item_3') ?></li>
								</ul>
							</div>
							<div class="col col-2">
								<ul>
									<?php $iconPerformance = get_field('icon_performance'); ?>
									<?php $iconKey = get_field('icon_key'); ?>
									<?php $iconTrack = get_field('icon_track'); ?>
									<span class="icon"><img src="<?php echo $iconTrack['url'] ?>" alt=""></span>
									<li><?php the_field('list_hero_item_4') ?></li>
									<span class="icon"><img src="<?php echo $iconPerformance['url'] ?>" alt=""></span>
									<li><?php the_field('list_hero_item_5') ?></li>
									<span class="icon"><img src="<?php echo $iconKey['url'] ?>" alt=""></span>
									<li><?php the_field('list_hero_item_6') ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<?php $imgHero = get_field('img_hero'); ?>
				<div class="hero-background absolute top-0 right-0" style="background-image:url('<?php echo $imgHero['url'] ?>');background-position:top">
					<div class="table" style="height:100%;">
						<div class="table-cell align-bottom">
							<div class="hero-quote-container">
								<div class="fw-l white h6"><blockquote class="white"><?php the_field('hero_quote'); ?></blockquote></div>
								<div class="mt2">
									<?php $imgTestimonialHero = get_field('img_testimonial_hero') ?>
									<div class="table-cell img-testimonial-hero align-middle list-reset"><img src="<?php echo $imgTestimonialHero['url']?>" height="40" alt="zaheer-merali"></div>
									<cite class="white"><?php the_field('txt_testimonial_hero') ?></cite>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!--/.header-->

