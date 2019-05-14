<?php get_header(); ?>
<!-- Main -->
<div id="main">
	<div class="inner">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
				</ul>
            </header>
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
	</div>
</div>
<?php get_footer(); ?>