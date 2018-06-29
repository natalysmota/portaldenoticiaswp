		<?php get_header(); ?>


		<section id="destaques">
			<article id="destaque">
				<?php query_posts('showposts=1&category_name=mundo&offset=0'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt_rereloaded(25, 'Ler mais'); ?>
					</a>
					<p><?php the_time('d/m/Y'); ?></p>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>

			<article id="destaque">
				<?php query_posts('showposts=1&category_name=mundo&offset=1'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt_rereloaded(25, 'Ler mais'); ?>
					</a>
					<p><?php the_time('d/m/Y'); ?></p>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>
		</section>

		<section id="noticias-destaques">
			<article id="noticia-destaque">
				<?php query_posts('showposts=1&category_name=meio-ambiente&offset=0'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>

						<?php the_title(); ?>
					</a>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>

			<article id="noticia-destaque">
				<?php query_posts('showposts=1&category_name=tecnologia&offset=0'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>

						<?php the_title(); ?>
					</a>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>

			<article id="noticia-destaque">
				<?php query_posts('showposts=1&category_name=entretenimento&offset=0'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>

						<?php the_title(); ?>
					</a>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>
		</section>

		<section id="noticias">
			<h4>Brasil</h4>

			<article id="noticia">
				<?php query_posts('showposts=1&category_name=brasil&offset=0'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
					</a>

					<div id="titulo-noticia">
						<a href="<?php the_permalink(); ?>">
							<h3>
								<?php the_title(); ?>
							</h3>
							<?php the_excerpt_rereloaded(25, ''); ?>
						</a>
					</div>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>

			<article id="noticia">
				<?php query_posts('showposts=1&category_name=brasil&offset=1'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
					</a>

					<div id="titulo-noticia">
						<a href="<?php the_permalink(); ?>">
							<h3>
								<?php the_title(); ?>
							</h3>
							<?php the_excerpt_rereloaded(25, ''); ?>
						</a>
					</div>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>

			<article id="noticia">
				<?php query_posts('showposts=1&category_name=brasil&offset=2'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
					</a>

					<div id="titulo-noticia">
						<a href="<?php the_permalink(); ?>">
							<h3>
								<?php the_title(); ?>
							</h3>
							<?php the_excerpt_rereloaded(25, ''); ?>
						</a>
					</div>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>
		</section>

		<section id="noticias">
			<h4>Mundo</h4>

			<article id="noticia">
				<?php query_posts('showposts=1&category_name=mundo&offset=2'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
					</a>

					<div id="titulo-noticia">
						<a href="<?php the_permalink(); ?>">
							<h3>
								<?php the_title(); ?>
							</h3>
							<?php the_excerpt_rereloaded(25, ''); ?>
						</a>
					</div>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>

			<article id="noticia">
				<?php query_posts('showposts=1&category_name=mundo&offset=3'); ?>
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
					</a>

					<div id="titulo-noticia">
						<a href="<?php the_permalink(); ?>">
							<h3>
								<?php the_title(); ?>
							</h3>
							<?php the_excerpt_rereloaded(25, ''); ?>
						</a>
					</div>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>

			<article id="noticia">
				<?php query_posts('showposts=1&category_name=mundo&offset=4'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
					</a>

					<div id="titulo-noticia">
						<a href="<?php the_permalink(); ?>">
							<h3>
								<?php the_title(); ?>
							</h3>
							<?php the_excerpt_rereloaded(25, ''); ?>
						</a>
					</div>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</article>
		</section>

		<?php include (TEMPLATEPATH . '/newsletter.php'); ?>

<?php get_footer(); ?>