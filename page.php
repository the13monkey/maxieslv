<?php get_header('page'); ?>

<div class="container pt-5 pb-5">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="row row-content-center">
            <h1 class="pb-5"><?php the_title() ?></h1>
        </div>

        <div class="row row-content-center">

            <?php the_content(); ?>

        </div>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
