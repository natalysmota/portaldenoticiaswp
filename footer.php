		<footer id="footer">
			<div id="logo">
				<a href="<?php get_settings('home'); ?>">
					<h1>
						Portal - Notícias
						<span>Você por dentro de tudo!</span>
					</h1>
				</a>
			</div>

			<div id="menu-footer">
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</div>

			<p>Portal Notícias &copy; <?php echo date(Y); ?> - Todos os direitos reservados</p>
			
		</footer>

		<?php wp_footer(); ?>
	</div>
</body>
</html>