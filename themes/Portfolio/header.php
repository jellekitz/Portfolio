<!DOCTYPE html>
<html lang="nl">
<head>
	<?php wp_head();?>
	<meta charset="UTF-8">
	<meta name="author" content="Jelle Kitzen">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jelle Kitzen</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body <?php body_class();?>>
	
<header>
	<div class="sticky_menu">
		<div class="scroll-animation">
			<a href="<?php echo get_home_url(); ?>">JK</a>
			<nav>
				<?php wp_nav_menu(
					array(
						'top-menu' => __('Top Menu', 'theme')
					)
				);?>
			</nav>
			<button id="hamburger-icon" class="hamburger hamburger--squeeze" type="button" data-aos="fade-left">
  				<span class="hamburger-box">
    				<span class="hamburger-inner"></span>
  				</span>
  				<p>menu</p>
			</button>
		</div>
	</div>
</header>
<div class="fullscreen-navigation none">
	<nav>

		<?php wp_nav_menu(
    		array (
    			'top-menu' => __('Top Menu', 'theme'),
    			'link_before' => '<span class="menuClick">',
    			'link_after' => '</span>',
    		)
		);?>

	</nav>
</div>
