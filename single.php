		<?php get_header(); ?>


		<div id="single">
			<section id="post">
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
					<span class=titulo><?php the_title(); ?></span>

					<span class="data-autor-post">
						Autor: <?php the_author_firstname(); ?> <?php the_author_lastname(); ?> | 
						Postado: <?php the_time('d/m/Y'); ?> | 
						Atualizado: <?php the_modified_date('d/m/Y H:i'); ?>
					</span>

					<?php the_content(); ?>

					<span class="tags"><?php if (function_exists('the_tags')) the_tags(); ?></span>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</section>

			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
		</div>


		<?php get_footer(); ?>