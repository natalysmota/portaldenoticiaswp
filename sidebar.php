		<aside id="sidebar">
			<div id="anuncio">
				<h2>PUBLICIDADE</h2>
			</div>

			<section id="noticias">
				<h2>Últimas notícias</h2>

				<article id="noticia">
					<?php query_posts('showposts=1&category_name=mundo&offset=0') ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>

							<p><?php the_excerpt_rereloaded(15, ''); ?></p>
						</a>
					<?php endwhile; else : ?>
					<?php endif; ?>
				</article>

				<article id="noticia">
					<?php query_posts('showposts=1&category_name=mundo&offset=1') ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>

							<p><?php the_excerpt_rereloaded(15, ''); ?></p>
						</a>
					<?php endwhile; else : ?>
					<?php endif; ?>
				</article>

				<article id="noticia">
					<?php query_posts('showposts=1&category_name=mundo&offset=2') ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>

							<p><?php the_excerpt_rereloaded(15, ''); ?></p>
						</a>
					<?php endwhile; else : ?>
					<?php endif; ?>
				</article>			
			</section>
		</aside>