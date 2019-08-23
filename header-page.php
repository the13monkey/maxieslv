<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxie's | <?php the_title(); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    
    <header class="sticky-top" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/head_banner.jpg')">
        <div class="container-fluid ">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <?php if (function_exists('the_custom_logo')) {the_custom_logo();} ?>
                </li>
                <li class="nav-item custom-logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/maxies-location_2.png" alt="<?php get_bloginfo('name') ?>" width="auto" height="60" id="the-location"/>
                </li>
                <li class="nav-item">
                    <div id="open-menu">
                        <i class="fas fa-bars fa-3x" style="color: #fff;"></i>
                    </div>
                    <div id="close-menu">
                        <i class="fas fa-times fa-3x"></i>
                    </div>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'page-menu',
                            'menu_class' => 'menu-expand'
                        )
                    )?>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'page-menu',
                            'menu_class' => 'menu-mobile'
                        )
                    )?>
                </li>
            </ul> 
        </div>
    </header>
   