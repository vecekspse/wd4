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
		<!-- Section -->
			<section>
				<header class="major">
					<h2>Články</h2>
				</header>
				<div class="posts">
				<?php if(have_posts()) :
						while(have_posts()) :
							the_post();
				?>
					<article>
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink();?>" class="image">
						the_post_thumbnail();
						</a>
					<?php endif; ?> 						
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<ul class="actions">
							<li><a href="<?php the_permalink();?>" class="button">Více</a></li>
						</ul>
					</article>
					<?php
						endwhile;
					endif;
				?>
				</div>

			</section>

	</div>
</div>
<?php get_footer(); ?>