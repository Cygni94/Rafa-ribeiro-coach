<?php /* Template Name: Mentoria */?>
<?php get_header();?>

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/treinamentos.css">
<?php $theme_folder=get_template_directory_uri();?>
<div class="papo-page">
    <main class="papo">
        <div class="container">
            <div class="row">
                <div class="papo__callout offset-md-2 col-md-8 col-12">
                    <h1>Você sonha em empreender suas idéias, seus sonhos e talentos?
                        <br>Assista o vídeo para saber sobre o</h1>
                </div>
                <div class="offset-md-4 col-md-4 col-12">
                    <img class="papo__img" src="<?php bloginfo('template_url');?>/assets/img/brand/logo-mentoria.png" alt="Mentoria">
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

    <section class="callout mentoria">
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
                $args = array( 'category_name' => 'mentoria', 'post_type' => 'video', 'posts_per_page' => -1 );
                $catquery = new WP_Query( $args );
                if( $catquery->have_posts() ) {?>
                <div class="videos__list row">
                    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="videos__item col-md col-12">
                        <div class="videos__item--title">
                            <a href="<?= the_permalink();?>">
                                <h4>
                                    <?php the_title();?>
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
                    <?php endwhile;
                wp_reset_postdata();
            } ?>
    </section>

    <section class="callout mentoria">
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
                    $args = array( 'category_name' => 'mentoria', 'post_type' => 'audio', 'posts_per_page' => -1 );
                    $catquery = new WP_Query( $args );
                    if( $catquery->have_posts() ) {?>
                    <div class="audios__list row">
                        <div class=" offset-md-2 col-md-8 offset-0 col">
                            <div class="audios__list--header">
                                <h2>mentoria</h2>
                                <h5>Rafa Ribeiro</h5>
                            </div>
                            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                            <hr>
                            <div class="audios__item">
                                <div class="audios__item--wrapper">
                                    <div class="audios__item--header">
                                        <span class="audios__item--title">mentoria </span>
                                        <span class="separator">- </span>
                                        <span class="audios__item--guest">
                                            <?php the_title();?>
                                        </span>
                                    </div>
                                    <div class="audios__item--player">
                                        <span class="play-btn">
                                            <?php the_content();?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;
                    wp_reset_postdata();
                } ?>
        </section>
    </div>

    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
    <script type="text/javascript">
        require(["mojo/signup-forms/Loader"], function (L) {
            L.start({
                "baseUrl": "mc.us17.list-manage.com",
                "uuid": "df9ab4b863ab4a55fa168caf6",
                "lid": "f0b21dcfa4"
            })
        })
    </script>

    <?php get_footer();?>