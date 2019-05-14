<?php get_header(); ?>
<!-- Content -->
<section>
    <?php if(have_posts()) :
        while(have_posts()) :
            the_post();
    ?>
        <header class="main">
            <h1><?php the_title(); ?></h1>
        </header>
        <?php 
        if ( has_post_thumbnail() ) : ?>
            <span class="image main">
            the_post_thumbnail();
            </span>
        <?php 
        endif; 
        the_content();        
        endwhile;
    endif;
    ?>
</section>		
<?php get_footer(); ?>