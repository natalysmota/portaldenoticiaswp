		<div id="newsletter">
			<h4>Newsletter</h4>
			<p>Fique por dentro de todas as nossas novidades</p>

			<div id="form-newsletter">
				<input type="email" name="email" id="email" placeholder="Informe seu email"><br/>
				<input type="submit" id="btn-enviar-email" value="Cadastrar-se">
			</div>

			<div id="carregando-news">
				<figure>
					<img src="<?php bloginfo('template_url'); ?>/images/ajax-loader.gif">
						Cadastrando e-mail, aguarde...
				</figure>
			</div>

			<div id="retorno-news"></div>
		</div>