<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
	<title><?php the_title(); ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/allen-overseas.css">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/menu.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/blog.css">
	<?php wp_head(); ?>
</head>

<body>
	<!-- Loader Website -->
	<div id="loading">
		<img id="loading-image" src="https://d3594pyssyqeez.cloudfront.net/wp-content/uploads/2022/09/loader.gif" alt="Loading..." />
	</div>

	<!-- Top Alert -->
	<div class="alert alert-warning alert-dismissible fade show m-0" role="alert">
		<strong>Holy guacamole!</strong> You should check in on some of those fields below.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	
	<!-- Navbar of Website -->
	<section class="sticky-top bg-white">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cropped-logo.webp" alt="LOGO" class="logo"></a>
				<a href="" class="nav-link btn btn-primary btn-lg text-right d-block d-sm-none px-3 py-1">Apply Now</a>
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
					<div class="hamburger-toggle">
						<div class="hamburger">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</button>
				<div class="collapse navbar-collapse" id="navbar-content">
					<?php
					wp_nav_menu(array(
						'link_before' => '<img src="' . carbon_get_the_post_meta('icon_image') . '" />',
						'theme_location' => 'main-menu',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
						'depth' => 4,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
					?>
					<ul>
						<li class="nav-link btn btn-primary btn-lg"><a href="javascript:;" class="py-2" data-bs-toggle="modal" data-bs-target="#ApplyNowPopup">Apply Now</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</section>