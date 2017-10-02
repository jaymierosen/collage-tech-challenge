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
		<div class="page-container">
			<div class="overflow-block md-hide-below">
				<div class="container">
					<div class="hero clearfix relative">
						<div class="col col-12 md-col-6 relative z1">
							<div class="logo"><!--logoHeader-->
								<?php $logoHeader = get_field('logo_header'); 
								?>
								<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><img class="collage-logo" src="<?php echo $logoHeader['url'] ?>" alt="collage-logo" /></a>
							</div><!--logoHeader-->
							<div class="sm-pt2 sm-mt3 mt3">
								<div class="max-width-2">
									<h2 class="gray"><?php the_field('headline_hero') ?></h2>
									<div class="h6 fw-l mt2 gray">
										<p class="hero-paragraph"><?php the_field('hero_paragraph'); ?></p>
									</div>
									<div class="mb1">
										<a href=""><button class="btn"><?php the_field('btn_hero'); ?></button></a>
									</div>
									<div class="col col-1">
										<ul>
											<?php $iconCheck = get_field('icon_check'); ?>
											<?php $iconMonitor = get_field('icon_monitor'); ?>
											<span><img src="<?php echo $iconMonitor['url'] ?>" alt=""></span>
											<span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span>
											<li><?php the_field('list_hero_item_1') ?></li>
											<span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span>
											<li><?php the_field('list_hero_item_2') ?></li>
											<span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span>
											<li><?php the_field('list_hero_item_3') ?></li>
										</ul>
									</div>
									<div class="col col-2">
										<ul>
											<span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span>
											<li><?php the_field('list_hero_item_4') ?></li>
											<span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span>
											<li><?php the_field('list_hero_item_5') ?></li>
											<span class="icon"><img src="<?php echo $iconCheck['url'] ?>" alt=""></span>
											<li><?php the_field('list_hero_item_6') ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $imgHero = get_field('img_hero'); ?>
			<div class="hero-background" style="background-image:url(<?php echo $imgHero['url'] ?>); background-size: cover; background-position: top; background-repeat: no-repeat; height: 76%; ">
				<div class="table pl4 pb4">
					<div class="table-cell align-bottom pl4 pb4">
						<div class="col-12 md-col-7">
							<div class="fw-l">
								<!-- adding blockquote element here -->
								<blockquote class="white"><?php the_field('hero_quote'); ?></blockquote>
								<div class="table mt2">
									<div class="table-cell align-middle list-reset"><img src="" height="40" alt="zaheer-merali"></div>
									<div class="table-cell align-middle pl2 h7 fw-n">
										<cite class="white">Zaheer Merali, Eyecarrot</cite>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
		</div>
	</header><!--/.header-->

