<?php get_header(); ?>
<?php $theme_folder = get_template_directory_uri(); ?>

<main class="main container-fluid">
<div class="main__callout">
	<div class="main__lead">
		<span>tenha a vida dos seus</span>
	</div>
	<div class="main__headline">
		<span>sonhos</span>
	</div>
</div>
</main>

<section class="mailing-list">
<div class="container">
	<div class="row">
		<div class="mailing-list__callout col-md col-sm-12">
			<span>Entre para nossa lista e receba conteúdos
				<br> exclusivos e com prioridade</span>
		</div>
		<div class="mailing-list__input col-md col-sm-12">

			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://rafaribeiro.us17.list-manage.com/subscribe/post?u=df9ab4b863ab4a55fa168caf6&amp;id=f0b21dcfa4" method="post"
					id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
					novalidate>
					<div id="mc_embed_signup_scroll">
						<span class="mc-field-group">

							<input type="email" placeholder="Qual o seu e-mail?" name="EMAIL" class="mailing-list__input-email required email" id="mce-EMAIL">
						</span>
						<span class="clear">
							<input type="submit" value="Cadastrar" name="subscribe" id="mc-embedded-subscribe" class="mailing-list__button button">
						</span>
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true">
						<input type="text" name="b_4b32c2539aa1fa0b016c51887_c2b82fbe39" tabindex="-1" value="">
					</div>
				</form>
			</div>
		</div>
		<!--End mc_embed_signup-->
	</div>
</div>
</div>
</section>

<section class="assista" id="papo-momento-da-virada">
<div class="container">
	<div class="row">
		<div class="assista__callout col-md-6 col-12">
			<span class="assista__callout-main">assista gratuitamente o
				<br>papo momento da virada</span>
			<div class="assista__callout-img-sm col-10">
				<img class="img-fluid" src="<?= $theme_folder; ?>/assets/img/brand/logo_papo_momento_da_virada.png" alt="Papo Momento da Virada">
			</div>
			<span class="assista__callout-description">uma série de entrevistas com
				<br>empreendedores super inspiradores</span>
			<br>
			<a href="calltoaction.html">
				<button class="assista__callout-button">
					quero participar agora
				</button>
			</a>
		</div>
		<div class="assista__callout-img-md col-6">
			<img class="assista-img" src="<?= $theme_folder; ?>/assets/img/brand/logo_papo_momento_da_virada.png" alt="Papo Momento da Virada">
		</div>
	</div>
</div>
</section>

<section class="cursos" id="cursos">
<div class="container">
	<div class="row">
		<div class="cursos__section-header col-12">
			<div class="hr"></div>
			<span class="cursos__section-title">conheça nossos treinamentos</span>
		</div>
	</div>
</div>
<div class="cursos__container container">
	<div class="row">
		<div class="cursos__item-1 col-md-3 offset-1 offset-md-0 col-10">
			<span>momento da virada</span>
		</div>
		<div class="col-md"></div>
		<div class="cursos__item-2 col-md-3 offset-1 offset-md-0 col-10">
			<span>aperte o play</span>
		</div>
		<div class="col-md"></div>
		<div class="cursos__item-3 col-md-3 offset-1 offset-md-0 col-10">
			<span>mentoria</span>
		</div>
	</div>
</div>
</section>

<section class="depoimentos" id="depoimentos">
<div class="container">
	<div class="row">
		<div class="depoimentos__section-header col-12">
			<div class="hr"></div>
			<span class="depoimentos__section-title">depoimentos</span>
		</div>
	</div>
	<div class="depoimentos__list row">

		<div class="depoimentos__item-1 offset-md-0 col-md-3 offset-1 col-10">
			<div class="depoimentos__item-header">
				<h3>XANDE BASTOS</h3>
			</div>
			<div class="depoimentos__item-body">
				<p>O resultado foi incrível, pois
					<br>consegui entender as minhas
					<br>maiores dificuldades e
					<br>potencializar as minhas
					<br>qualidades. Hoje sou uma
					<br>pessoa melhor e com foco na
					<br>solução.</p>
			</div>
			<div class="depoimentos__item-footer">
				<img src="<?= $theme_folder; ?>/assets/img/icon/aspas_depoimento.png" alt="aspas">
			</div>
		</div>

		<div class="depoimentos__item-2 col-md-3 offset-1 col-10">
			<div class="depoimentos__item-header">
				<h3>ÁGATHA TOMMASI</h3>
			</div>
			<div class="depoimentos__item-body">
				<p>Foi um processo de
					<br>autodescoberta. Aprendi
					<br>quais eram os meus limites e
					<br>a julgar se devia respeitá-los
					<br>ou ultrapassá-los. Aprendi a
					<br>equilibrar minha energia e
					<br>hierarquizar minhas
					<br>prioridades.</p>
			</div>
			<div class="depoimentos__item-footer">
				<img src="<?= $theme_folder; ?>/assets/img/icon/aspas_depoimento.png" alt="aspas">
			</div>
		</div>

		<div class="depoimentos__item-3 col-md-3 offset-1 col-10">
			<div class="depoimentos__item-header">
				<h3>RAFAEL, DABÁ</h3>
			</div>
			<div class="depoimentos__item-body">
				<p>Vou levar para a vida inteira o
					<br>que aprendi com o coaching.
					<br>Se eu pudesse teria esse
					<br>acompanhamento a vida
					<br>toda!!!</p>
			</div>
			<div class="depoimentos__item-footer">
				<img src="<?= $theme_folder; ?>/assets/img/icon/aspas_depoimento.png" alt="aspas">
			</div>
		</div>
	</div>
</div>
</section>


<?php 
			$args = array( 'post_type' => 'depoimento' );
			$loop = new WP_Query( $args );
			if( $loop->have_posts() ) { ?>
			<section class="blog">
			    <ul class="imoveis-listagem">
			    <?php while( $loop->have_posts() ) {
					$loop->the_post(); ?>

				    <li class="imoveis-listagem-item">
					    <a href="<?= the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>

						<h2><?php the_title(); ?></h2>

						<p><?php the_content(); ?></p>
					    </a>
				    </li>

			    <?php } ?>
			    </ul>
			</section>
		<?php	} ?>


<section class="about" id="sobre">
<div class="container">
	<div class="row">
		<div class="about__container col-md-6 col-12">
			<div class="about-sm"></div>
			<div class="about__title">
				<span class="about__title-blue">
					<span class="about__title-black">conheça o </span>
					rafa</span>
				</span>
			</div>
			<br>
			<div class="about__text">
				<p>Um apaixonado por esportes e empreendedorismo, formado em
					<br> Coaching e Liderança pela Organização Internacional Cóndor
					<br> Blanco.</p>
				<p>Pai do Matheus, que sonha em ser jogador de futebol.</p>
				<p>Co-criador da Revoada, rede de facilitadores que potencializa o
					<br> desenvolvimento pessoal e de grupos através de cursos,
					<br> workshop e vivências.</p>
				<p>Membro da equipe de Coachs da empresa Desperte-se. Mentor
					<br> de jovens Empreendedores no Programa Iniciativa Jovem.</p>
				<p>Formado em sustentabilidade pelo Gaia Education e facilitador de
					<br> projetos colaborativos - Dragon Dreaming.</p>
				<p class="last-p">Turismólogo e Sócio-fundador da Mini Aventuras.</p>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>