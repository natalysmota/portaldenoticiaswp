		<?php get_header(); ?>

		<div id="category">
			<section id="categoria-noticias">
				<h2>
					<?php single_cat_title(); ?>
				</h2>

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<article id="categoria-noticia">
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
							<span id="info-post">
								Postado: <?php the_time('j M Y') ?> | Por: <?php the_author_firstname(); ?> <?php the_author_lastname(); ?> | 
								<?php comments_number('0 comentário', '1 comentário', '% comentários'); ?> | 
								<?php if(function_exists('the_views')) {the_views();} ?>
							</span>

							<?php the_excerpt_rereloaded(30, ''); ?>
						</a>
					</article>
				<?php endwhile; else : ?>
				<?php endif; ?>

				<div id="paginacao">
					<?php wp_pagenavi(); ?>
				</div>
			</section>

			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
		</div>

		<?php get_footer(); ?>
