<?php get_header(); ?>

<div class="container pt-5 pb-5 post-wrapper">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="row">
            <a class="pt-5 post-title" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </div>

        <div class="row pb-5">

            <?php the_excerpt(); ?>
            <a class="btn btn-primary" href="<?php the_permalink() ?>">Read more</a>

        </div>

    <?php endwhile; endif; ?>
	
	<div class="nav-previous alignleft"><?php previous_posts_link( 'Previous Page' ); ?></div>
	<div class="nav-next alignright"><?php next_posts_link( 'Next Page' ); ?></div>


</div>

<?php get_footer(); ?>