<?php get_header(); ?>

<div id="about-us"></div>

<div id="homepage-video">
    <video playsinline autoplay muted loop class="video">
        <source src="<?php echo get_theme_file_uri('media/home_video.mp4'); ?>" type="video/mp4">
    </video>
</div>

<div class="container-fluid" id="main-wrapper">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="row">

            <?php the_content(); ?>

        </div>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>