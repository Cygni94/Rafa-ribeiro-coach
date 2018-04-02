<?php /* Template Name: Index */?>
<?php get_header();?>
<?php $theme_folder=get_template_directory_uri();?>

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
                        id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
                    <img class="img-fluid" src="<?= $theme_folder;?>/assets/img/brand/logo_papo_momento_da_virada.png" alt="Papo Momento da Virada">
                </div>
                <span class="assista__callout-description">uma série de entrevistas com
                    <br>empreendedores super inspiradores</span>
                <br>
                <a href="http://www.rafaribeiro.com.br/papo-momento-da-virada">
                    <button class="assista__callout-button">
                        quero participar agora
                    </button>
                </a>
            </div>
            <div class="assista__callout-img-md col-6">
                <img class="assista-img" src="<?= $theme_folder;?>/assets/img/brand/logo_papo_momento_da_virada.png" alt="Papo Momento da Virada">
            </div>
        </div>
    </div>
</section>

<?php 
$appointment_options=theme_setup_data(); 
$service_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($service_setting['service_section_enabled'] == 0 ) { ?>
<div class="Service-section">
	<div class="container">
	
		<div class="row">
			<div class="col-md-12">
			
				<div class="section-heading-title">
					<h1> <?php echo $service_setting['service_title']; ?></h1>
					<p><?php echo $service_setting['service_description']; ?> </p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_one_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_one_title']; ?></h3>
							<p><?php echo $service_setting['service_one_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_two_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_two_title']; ?></h3>
							<p><?php echo $service_setting['service_two_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_three_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_three_title']; ?></h3>
							<p><?php echo $service_setting['service_three_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_four_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_four_title']; ?></h3>
							<p><?php echo $service_setting['service_four_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_five_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_five_title']; ?></h3>
							<p><?php echo $service_setting['service_five_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_six_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_six_title']; ?></h3>
							<p><?php echo $service_setting['service_six_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- /HomePage Service Section -->
<?php } ?>

<?php
                $args = array( 'category_name' => 'treinamento', 'post_type' => 'page', 'posts_per_page' => 3 );
                $catquery = new WP_Query( $args );
                if( $catquery->have_posts() ) {?>
    <section class="cursos" id="treinamentos">
        <div class="container">
            <div class="row">
                <div class="cursos__section-header col-12">
                    <div class="hr"></div>
                    <span class="cursos__section-title">conheça nossos treinamentos</span>
                </div>
            </div>
        </div>
        <div class="cursos__container container">
            <div class="row" style="justify-content: space-between">
                <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                <div class="cursos__item col-md-3 offset-1 offset-md-0 col-10" style="background-image: url('<?php echo $thumb['0'];?>')">
                    <a class="curso-link" href="<?php the_permalink(); ?>">
                        <?php the_title();?>
                    </a>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
        <?php } ?>

                <?php 
			$args = array( 'post_type' => 'depoimento' );
			$loop = new WP_Query( $args );
			if( $loop->have_posts() ) {?>
                <section class="depoimentos">
                    <div class="container">
                        <div class="row">
                            <div class="depoimentos__section-header col-12" id="depoimentos">
                                <div class="hr"></div>
                                <span class="depoimentos__section-title">depoimentos</span>
                            </div>
                        </div>
                        <div class="depoimentos__list row">

                            <?php while( $loop->have_posts() ) {
			$loop->the_post();?>
                            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <div class="depoimentos__wrapper offset-md-0 col-md-3 offset-1 col-10">
                                <div class="depoimentos__item" style="background-image: url('<?php echo $thumb['0'];?>')">
                                    <div class="depoimentos__item-header">
                                        <h3>
                                            <?php the_title();?>
                                        </h3>
                                    </div>
                                    <div class="depoimentos__item-body">
                                        <p>
                                            <?php the_content();?>
                                        </p>
                                    </div>
                                    <div class="depoimentos__item-footer">
                                        <img src="<?= $theme_folder;?>/assets/img/icon/aspas_depoimento.png" alt="aspas">
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </section>
                <?php	}?>

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

                    <?php get_footer();?>