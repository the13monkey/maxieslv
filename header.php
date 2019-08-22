<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxie's | <?php single_post_title(); ?></title>
	<style>
		.nav-previous, .nav-next {
			text-align: right; 
		}
		.nav-previous a, .nav-next a {
			text-decoration: none; 
			color: #212f3e;
		}
		.nav-previous a:hover {
			text-decoration: none; 
			color: #ef3d39; 
		}
		.nav-next a:hover {
			text-decoration: none; 
			color: #ef3d39; 
		}
	</style>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    
    <header class="sticky-top">
        <div class="container-fluid ">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <?php if (function_exists('the_custom_logo')) {the_custom_logo();} ?>
                </li>
                <li class="nav-item custom-logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/maxies-location.png" alt="<?php get_bloginfo('name') ?>" width="auto" height="60" id="the-location"/>
                </li>
                <li class="nav-item">
                    <div id="open-menu">
                        <i class="fas fa-bars fa-3x"></i>
                    </div>
                    <div id="close-menu">
                        <i class="fas fa-times fa-3x"></i>
                    </div>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'menu-expand'
                        )
                    )?>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'menu-mobile'
                        )
                    )?>
                </li>
            </ul> 
        </div>
    </header>
   