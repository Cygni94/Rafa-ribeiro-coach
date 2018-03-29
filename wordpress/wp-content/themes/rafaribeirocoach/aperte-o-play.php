<?php /* Template Name: Aperte o play */?>
<?php get_header();?>

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/treinamentos.css">
<?php $theme_folder=get_template_directory_uri();?>
<div class="papo-page">
    <main class="papo">
        <div class="container">
            <div class="row">
                <div class="papo__callout col-md-12 col-12">
                    <h1>
                        <strong>Conquiste liberdade e autonomia. Empreenda com paixão.</strong>
                        <br> Crie um negócio estruturado e validado, alinhado com seu propósito de vida.
                        <br> E tenha o retorno financeiro desejado.</h1>
                </div>
                <div class="offset-md-4 col-md-4 col-12">
                    <img class="papo__img" src="<?php bloginfo('template_url');?>/assets/img/brand/logo-aperte-o-play.png" alt="Aperte o play">
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
            <div class="row callout__button">
                <button type="button" class="btn btn-subscribe">
                    quero me inscrever
                </button>
            </div>
        </div>
    </main>

    <section class="beneficios container-fluid">
        <div>
            <h1>
                <strong>A sensação de plenitude através
                    <br>do seu trabalho.</strong>
            </h1>
            <br>
            <h2>Imagine por um momento criar um negócio que:</h2>
        </div>
        <div class="row">
            <div class="beneficios__item col-md-3">
                <div class="beneficios__item--icon"></div>
                <div class="beneficios__item--label">você ame e acredite.</div>
            </div>
            <div class="beneficios__item col-md-3">
                <div class="beneficios__item--icon"></div>
                <div class="beneficios__item--label">você utilize seus talentos.</div>
            </div>
            <div class="beneficios__item col-md-3">
                <div class="beneficios__item--icon"></div>
                <div class="beneficios__item--label">traga mais tempo para
                    <br>você e sua família.</div>
            </div>
        </div>
        <div class="row">
            <div class="beneficios__item col-md-3">
                <div class="beneficios__item--icon"></div>
                <div class="beneficios__item--label">traga o retorno
                    <br>financeiro merecido.</div>
            </div>
            <div class="beneficios__item col-md-3">
                <div class="beneficios__item--icon"></div>
                <div class="beneficios__item--label">transforme a vida de
                    <br>milhares de pessoas.</div>
            </div>
            <div class="beneficios__item col-md-3">
                <div class="beneficios__item--icon"></div>
                <div class="beneficios__item--label">traga liberdade
                    <br>e autonomia.</div>
            </div>
        </div>
    </section>

    <section class="etapas container-fluid">
        <div>
            <h1>
                <strong>O Treinamento perfeito para colocar
                    <br>suas ideias empreendedoreas em ação</strong>
            </h1>
            <br>
            <h2>Conheça os 10 módulos para criar o trabalho dos seus sonhos</h2>
        </div>
        <div class="etapas__list">
            <div class="row">
                <div class="etapas__item left col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 01</div>
                        <div class="label__title">START - ONDE ESTOU?</div>
                        <div class="label__subtitle">O jogo vai começar
                            <br>reconhecendo sua história e o
                            <br>seu momento atual</div>
                    </div>
                </div>
                <div class="etapas__item right col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 02</div>
                        <div class="label__title">DESCOBRINDO
                            <br>O PROPÓSITO</div>
                        <div class="label__subtitle">É a hora de reencontrar a
                            <br>sua essência e estruturar a
                            <br>da empresa</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="etapas__item left col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 03</div>
                        <div class="label__title">VISÃO ALÉM DO ALCANCE</div>
                        <div class="label__subtitle">É preciso construir
                            <br>internamente onde você
                            <br>quer estar no futuro.
                            <br>
                            <i>"Para quem não sabe onde vai,
                                <br>qualquer caminho serve."</i>
                        </div>
                    </div>
                </div>
                <div class="etapas__item right col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 04</div>
                        <div class="label__title">VALORES VALIOSOS</div>
                        <div class="label__subtitle">Serão os seus guias na hora
                            <br>de tomar decisões e conectar
                            <br>as pessoas certas. Sem eles
                            <br>não somos nada.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="etapas__item left col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 05</div>
                        <div class="label__title">RECONECTANDO COM
                            <br>A SUA ARTE</div>
                        <div class="label__subtitle">Criar seus produtos e serviços
                            <br>a partir dos seus talentos
                            <br>vai te manter no jogo do
                            <br>longo prazo.
                        </div>
                    </div>
                </div>
                <div class="etapas__item right col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 06</div>
                        <div class="label__title">A PONTE</div>
                        <div class="label__subtitle">Definir o passo a passo com
                            <br>objetivos, metas e tarefas vão
                            <br>te levar ao outro lado.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="etapas__item left col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 07</div>
                        <div class="label__title">AJUSTANDO AS VELAS</div>
                        <div class="label__subtitle">Momento de rever toda a
                            <br>caminhada para avaliar os
                            <br>pontos fortes e os ajustes
                            <br>a fazer.
                        </div>
                    </div>
                </div>
                <div class="etapas__item right col-md-5">
                    <div class="etapas__item--icon"></div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE FINAL</div>
                        <div class="label__title">CELEBRAÇÃO</div>
                        <div class="label__subtitle">Agora seu negócio está
                            <br>estruturado, testado e você
                            <br>vai seguir fazendo o que ama
                            <br>e tendo a remuneração
                            <br>que merece.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bonus container-fluid">
        <div>
            <h1>
                <strong>Bônus para apoiar no aprendizado</strong>
            </h1>
            <br>
            <h2>Conteúdos e Cursos Extras para Impulsionar sua Jornada</h2>
        </div>
        <div class="row">
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>SITE PROFISSIONAL</strong>
                </div>
                <div class="bonus__item--subtitle">como construir seu site em apenas 01 hora</div>
            </div>
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>CONTROLE FINANCEIRO</strong>
                </div>
                <div class="bonus__item--subtitle">receba planilhas prontas para
                    <br>controlar suas finanças de forma prática</div>
            </div>
        </div>
        <div class="row">
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>IDENTIDADE VISUAL</strong>
                </div>
                <div class="bonus__item--subtitle">crie suas artes de forma gratuita e fácil</div>
            </div>
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>VÍDEOS DE QUALIDADE</strong>
                </div>
                <div class="bonus__item--subtitle">apenda a editar vídeos para suas redes sociais</div>
            </div>
        </div>
        <div class="row">
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>TAREFAS EM DIA</strong>
                </div>
                <div class="bonus__item--subtitle">aprenda como gerenciar suas tarefas e
                    <br>aumentar a sua produtividade</div>
            </div>
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>DESMISTIFICANDO A CONTABILIDADE</strong>
                </div>
                <div class="bonus__item--subtitle">o que você precisa saber nessa fase inicial</div>
            </div>
        </div>
        <div class="row">
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>BIBLIOGRAFIA DO CURSO</strong>
                </div>
                <div class="bonus__item--subtitle">leituras sugeridas para você se
                    <br>aprofundar em cada tema</div>
            </div>
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>MAPA DA MINA</strong>
                </div>
                <div class="bonus__item--subtitle">material didático para registrar
                    <br>o seu progresso</div>
            </div>
        </div>
        <div class="row">
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>ÁUDIOS EM MP3</strong>
                </div>
                <div class="bonus__item--subtitle">todos os bônus em mp3 para ouvir
                    <br>onde você quiser</div>
            </div>
            <div class="bonus__item col-md-5">
                <div class="bonus__item--icon"></div>
                <div class="bonus__item--title">
                    <strong>COMUNIDADE VIP DE ALUNOS</strong>
                </div>
                <div class="bonus__item--subtitle">rede de relacionamento com os alunos
                    <br>do treinamento</div>
            </div>
        </div>
    </section>

    <section class="investimento container-fluid">
        <div class="row">
            <div class="investimento__datas">
                <div class="investimento__datas--icon"></div>
                <ul>DATAS DOS<br>TREINAMENTOS:</ul>
                <li>23/08/2018</li>
                <li>23/08/2018</li>
                <li>23/08/2018</li>
                <li>23/08/2018</li>
                <br>
                <ul>HORÁRIO:</ul>
                <li>19:00 ÀS 22:00</li>
            </div>
            <div class="investimento__valor"></div>
            <div class="investimento__items"></div>
        </div>
    </section>

    <section class="callout momento-da-virada">
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
                $args = array( 'category_name' => 'aperte-o-play', 'post_type' => 'video', 'posts_per_page' => -1 );
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

    <section class="callout momento-da-virada">
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
                    $args = array( 'category_name' => 'aperte-o-play', 'post_type' => 'audio', 'posts_per_page' => -1 );
                    $catquery = new WP_Query( $args );
                    if( $catquery->have_posts() ) {?>
                <div class="audios__list row">
                    <div class=" offset-md-2 col-md-8 offset-0 col">
                        <div class="audios__list--header">
                            <h2>aperte o play</h2>
                            <h5>Rafa Ribeiro</h5>
                        </div>
                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                        <hr>
                        <div class="audios__item">
                            <div class="audios__item--wrapper">
                                <div class="audios__item--header">
                                    <span class="audios__item--title">aperte o play </span>
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