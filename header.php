<?php /** Header @package fregateisland */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo get_bloginfo(); ?></title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<script src="https://kit.fontawesome.com/dc2cdfd0db.js" crossorigin="anonymous"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site-wrapper">
		
		<header>
			<div class="mobile-nav">
				<a href="" class="nav-trigger"><i class="fas fa-bars"></i></a>
				<a href="#" class="close-mobile-nav"><i class="fas fa-times"></i></a>
				<div class="mobile-nav__inner">
					<?php get_template_part('template-parts/nav-items');?>
					<a href="#contact" class="book-now-cta">Book Now</a>
				</div>
			</div>
			
			<div class="nav-overlay">
				<div class="container">
					<div class="container-inner">
						<div class="logo-container">
							<a href="<?php echo home_url( '/' );?>" class="logo-wrapper">
								<?php get_template_part('inc/img/logo-text');?>
							</a>
						</div>
						<nav>
							<?php get_template_part('template-parts/nav-items');?>
						</nav>
						<a href="/contact" class="book-now-cta">Book Now</a>	
					</div>
				</div>
			</div>
		</header>
			
		<main>	