		<?php get_header(); ?>


		<div id="error">
			<div id="message-error">
				<h3>Desculpe, a página que você procura não existe.</h3>
				<figure>
					<img src="<?php bloginfo('template_url'); ?>/images/404.jpg">
				</figure>
			</div>

			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
		</div>


		<?php get_footer(); ?>