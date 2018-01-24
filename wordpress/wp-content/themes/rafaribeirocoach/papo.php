<?php /* Template Name: Papo Momento da Virada */ ?>
<?php get_header(); ?>
<?php $theme_folder = get_template_directory_uri(); ?>

<main class="papo">
	<div class="container">
		<div class="row">
			<div class="papo__callout offset-md-2 col-md-8 col-12">
				<h1>Você sonha em empreender suas idéias, seus sonhos e talentos?
					<br>Assista o vídeo para saber sobre o</h1>
			</div>
			<div class="offset-md-4 col-md-4 col-12">
				<img class="papo__img" src="assets/img/brand/logo_papo_momento_da_virada.png" alt="Papo Momento da Virada">
			</div>
		</div>
		<div class="row">
			<div class="papo__video offset-md-2 col-md-8 col-12">
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
			the_content();
			?>
			</div>
		</div>
	</div>
</main>

<section class="callout">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2>Conheça a trajetória empreendedora de
					<span class="highlight">PESSOAS INCRÍVEIS</span>
					<br>e como realizaram seus
					<span class="highlight">MOMENTOS DE VIRADA.</span>
				</h2>
			</div>
		</div>
	</div>
</section>

<section class="videos">
	<div class="container">
		<div class="videos__list row">
		</div>
	</div>
</section>

<section class="callout">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<h2>Faça o DOWNLOAD e escute as nossas
					<span class="highlight">ENTREVISTAS</span> em qualquer lugar.
				</h2>
			</div>
		</div>
	</div>
</section>

<section class="audios">
	<div class="container">
		<div class="audios__list row">
			<div class=" offset-md-2 col-md-8 offset-0 col">
				<div class="audios__list--header">
					<h2>papo momento da virada</h2>
					<h5>Rafa Ribeiro</h5>
				</div>
				<hr>
				<div class="audios__item">
					<div class="audios__item--wrapper">
						<span class="audios__item--header">
							<span class="audios__item--btn">
								<img class="play-btn" src="assets/img/icon/play.svg" alt="">
							</span>
							<span class="audios__item--title">papo momento da virada </span>
							<span class="separator">- </span>
							<span class="audios__item--guest">ep. 01 - Roberta Guillen</span>
						</span>
						<span class="audios__item--length">00:00</span>
					</div>
				</div>
				<hr>
				<div class="audios__item">
					<div class="audios__item--wrapper">
						<span class="audios__item--header">
							<span class="audios__item--btn">
								<img class="play-btn" src="assets/img/icon/play.svg" alt="">
							</span>
							<span class="audios__item--title">papo momento da virada </span>
							<span class="separator">- </span>
							<span class="audios__item--guest">ep. 01 - Roberta Guillen</span>
						</span>
						<span class="audios__item--length">00:00</span>
					</div>
				</div>
				<hr>
				<div class="audios__item">
					<div class="audios__item--wrapper">
						<span class="audios__item--header">
							<span class="audios__item--btn">
								<img class="play-btn" src="assets/img/icon/play.svg" alt="">
							</span>
							<span class="audios__item--title">papo momento da virada </span>
							<span class="separator">- </span>
							<span class="audios__item--guest">ep. 01 - Roberta Guillen</span>
						</span>
						<span class="audios__item--length">00:00</span>
					</div>
				</div>
				<hr>
				<div class="audios__item">
					<div class="audios__item--wrapper">
						<span class="audios__item--header">
							<span class="audios__item--btn">
								<img class="play-btn" src="assets/img/icon/play.svg" alt="">
							</span>
							<span class="audios__item--title">papo momento da virada </span>
							<span class="separator">- </span>
							<span class="audios__item--guest">ep. 01 - Roberta Guillen</span>
						</span>
						<span class="audios__item--length">00:00</span>
					</div>
				</div>
				<hr>
				<div class="audios__item">
					<div class="audios__item--wrapper">
						<span class="audios__item--header">
							<span class="audios__item--btn">
								<img class="play-btn" src="assets/img/icon/play.svg" alt="">
							</span>
							<span class="audios__item--title">papo momento da virada </span>
							<span class="separator">- </span>
							<span class="audios__item--guest">ep. 01 - Roberta Guillen</span>
						</span>
						<span class="audios__item--length">00:00</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>