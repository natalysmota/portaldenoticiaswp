<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="autor" content="Nataly S. Mota">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description') ?>">
	<meta name="keywords" content="Notícias, Mundo, Brasil, Política, Tecnologia">
	<title>
		<?php 
			if (is_home()) {
				bloginfo('name');
			} elseif (is_category()) {
				bloginfo('name'); echo ' - '; single_cat_title();
			} elseif (is_single()) {
				single_post_title();
			} elseif (is_page()) {
				bloginfo('name'); echo ' - '; single_post_title();
			} else {
				wp_title('', true);
			}
		?>
	</title>
	<style type="text/css" media="screen">
		@import url(<?php bloginfo('stylesheet_url'); ?>);
	</style>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
	<script type="text/javascript">
		$(function() {
			$("#btn-enviar-email").click(function() {
				$("#form-newsletter").hide('slow');
				beforeSend:$("#carregando-news").show('slow');
				var email = $("#email").val();
				$.post("<?php bloginfo('template_directory'); ?>/newsletter/form.php", {email: email}, function(pegar_retorno) {
					complete:$("#carregando-news").hide('slow');
					$("#retorno-news").show('slow').text(pegar_retorno);
				});
			});
		});
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="conteudo-completo">
		<header id="header">
			<div id="logo">
				<a href="<?php echo get_settings('home'); ?>">
					<h1>
						Portal - Notícias
						<span>Você por dentro de tudo!</span>
					</h1>
				</a>
			</div>

			<div id="publicidade">
				<h2>PUBLICIDADE</h2>
			</div>

			<button id="btn-menu">Menu</button>

			<nav id="menu">
				<ul>
					<?php wp_list_categories('title_li=&hide_empty=0'); ?>
				</ul>
			</nav>
		</header>

		<script>
			$('#btn-menu').on("click", function() {
				$('#menu').toggle(400);
			});
		</script>