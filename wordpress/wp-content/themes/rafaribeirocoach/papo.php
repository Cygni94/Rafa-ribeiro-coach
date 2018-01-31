<?php /* Template Name: Papo Momento da Virada */ ?>
<?php $theme_folder = get_template_directory_uri(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="<?php bloginfo('template_url'); ?>/rafaribeiro.ico" />

	<?php wp_head(); ?>

	<title>Rafael Ribeiro Coaching - Desperte seu Herói</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/papo.css">

</head>


<body class="papo-page">
	<header class="header">
		<nav class="nav navbar navbar-dark navbar-expand-lg justify-content-between container">
			<div class="nav__brand">
				<a class="navbar-brand" href="index.html">
					<img class="nav__brand-logo" src="<?php bloginfo('template_url'); ?>/assets/img/brand/logo_menu.png" alt="">
				</a>
			</div>
			<button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
			    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="nav__menu collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav">
					<li class="nav__item nav-item">
						<a class="nav-link active" href="<?= $theme_folder; ?>/papo-momento-da-virada">papo momento da virada</a>
						</a>
					</li>
					<li class="nav__item nav-item">
						<a class="nav-link" href="<?= $theme_folder; ?>/treinamentos">treinamentos</a>
					</li>
					<li class="nav__item nav-item">
						<a class="nav-link" href="#">contato</a>
					</li>

				</ul>
			</div>
		</nav>
	</header>



	<main class="papo">
		<div class="container">
			<div class="row">
				<div class="papo__callout offset-md-2 col-md-8 col-12">
					<h1>Você sonha em empreender suas idéias, seus sonhos e talentos?
						<br>Assista o vídeo para saber sobre o</h1>
				</div>
				<div class="offset-md-4 col-md-4 col-12">
					<img class="papo__img" src="<?php bloginfo('template_url'); ?>/assets/img/brand/logo_papo_momento_da_virada.png" alt="Papo Momento da Virada">
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
			<?php 
			$args = array( 'post_type' => 'video' );
			$loop = new WP_Query( $args );
			if( $loop->have_posts() ) { ?>
				<div class="videos__list row">
					<?php while( $loop->have_posts() ) {
					$loop->the_post(); ?>
					<div class="videos__item col-md col-12">
						<div class="videos__item--title">
							<a href="<?= the_permalink(); ?>">
								<h4>
									<?php the_title(); ?>
								</h4>
							</a>
							<div class="videos__item--frame">
								<?php 
									if ( has_post_thumbnail() ) {
									the_post_thumbnail();
									} 
									the_content();
									?>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			<?php } ?>
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
			<?php 
		$args = array( 'post_type' => 'audio' );
		$loop = new WP_Query( $args );
		if( $loop->have_posts() ) { ?>
			<div class="audios__list row">
				<div class=" offset-md-2 col-md-8 offset-0 col">
					<div class="audios__list--header">
						<h2>papo momento da virada</h2>
						<h5>Rafa Ribeiro</h5>
					</div>
					<?php while( $loop->have_posts() ) {
				$loop->the_post();
				?>
					<hr>
					<div class="audios__item">
						<div class="audios__item--wrapper">
							<div class="audios__item--header">
								<span class="audios__item--title">papo momento da virada </span>
								<span class="separator">- </span>
								<span class="audios__item--guest">
									<?php the_title(); ?>
								</span>
							</div>
							<div class="audios__item--player">
								<span class="play-btn">
									<?php the_content(); ?>
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
	</section>

	<?php get_footer(); ?>