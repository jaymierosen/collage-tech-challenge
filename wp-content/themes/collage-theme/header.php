<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php // Load Meta ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title('|', true, 'right'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- stylesheets should be enqueued in functions.php -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<h2>Online HRIS Software, built for Law Firms and Legal Offices</h2>
		</div> <!-- /.container -->
	</header><!--/.header-->

