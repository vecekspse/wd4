<?php get_header(); ?>
		<!-- Section -->
			<section>
				<header class="major">
					<h2>Články :)</h2>
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


<?php get_footer(); ?>