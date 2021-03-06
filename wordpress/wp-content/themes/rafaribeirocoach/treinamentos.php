<?php /* Template Name: Treinamentos */?>

<?php $theme_folder = get_template_directory_uri();?>



<!DOCTYPE html>

<html lang="pt-BR">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

    <link rel="icon" href="rafaribeiro.ico" />



    <title>Rafael Ribeiro Coaching - Desperte seu Herói</title>



    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= $theme_folder;?>/assets/css/landing.css" type="text/css" />



</head>



<body>



    <section class="landing-callout">

        <div class="container">

            <div class="row">

                <div class="landing-callout__header col-12">

                    <span>treinamento 100% gratuito

                        <span class="hide-sm">|</span> ao vivo | online</span>

                </div>

            </div>



            <div class="landing-callout__main col-12">

                <span>Como

                    <span class="highlight">ter clareza </span>

                    dos próximos

                    <br>passos

                    <span class="highlight">para empreender</span>

                </span>

            </div>

            <div class="landing-callout__list row">

                <div class="offset-md-1 col-md-5 col-sm-12">

                    <div class="landing-callout__list--icon">

                        <img src="<?= $theme_folder;?>/assets/img/icon/like.png" alt="">

                    </div>

                    <div class="landing-callout__list--description">

                        <p>para quem:

                            <br>quer trabalhar com que faça sentido

                            <br>alinhado com o seu propósito.</p>

                        <p>. está se sentindo desalinhado, em um

                            <br>trabalho que não te representa.</p>

                        <p>. quer ter clareza do que poderia fazer

                            <br>se sentir mais vivo profissionalmente.</p>

                    </div>

                </div>

                <div class="col-md-4 col-sm-12">

                    <div class="landing-callout__list--icon">

                        <img src="<?= $theme_folder;?>/assets/img/icon/relogio.png" alt="">

                    </div>

                    <div class="landing-callout__list--date">
                        <?php
                        $evento_options = evento_setup_data();
                        $evento_setting = wp_parse_args(get_option('evento_options', array()), $evento_options);
                        { ?>
                            <p><?php echo $evento_setting['data_evento']; ?></p>
                            <p><?php echo $evento_setting['hora_evento']; ?></p>
                        <?php } ?>
                    </div>

                    <div class="landing-callout__list--icon">

                        <img src="<?= $theme_folder;?>/assets/img/icon/camera.png" alt="">

                    </div>

                    <div class="landing-callout__list--live">

                        <p>transmissão Ao Vivo e Online</p>

                    </div>

                </div>

                <div class="offset-md-2"></div>

            </div>

            <div class="row">

                <div class="mailing-list offset-md-3 col-md-6 offset-sm-1 col-sm-10">

                    <p>

                        <span class="highlight">cadastre seu melhor email abaixo</span>

                        <br>para reservar seu lugar nessa sala ao vivo!</p>

                    <div class="mailing-list__input">

                        <!-- Begin MailChimp Signup Form -->

                        <div id="mc_embed_signup">

                            <form action="https://rafaribeiro.us17.list-manage.com/subscribe/post?u=df9ab4b863ab4a55fa168caf6&amp;id=f0b21dcfa4" method="post"
                                id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                novalidate>

                                <div id="mc_embed_signup_scroll">

                                    <span class="mc-field-group">



                                        <input type="email" placeholder="Qual o seu e-mail?" name="EMAIL" class="mailing-list__input--email required email" id="mce-EMAIL">

                                    </span>

                                    <br>

                                    <span class="clear">

                                        <input type="submit" value="Cadastrar" name="subscribe" id="mc-embedded-subscribe" class="mailing-list__input--button button">

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

        </div>

    </section>



    <section class="landing-description">

        <div class="container">

            <div class="row">

                <div class="landing-description__header offset-md-3 col-md-6 col-sm-12">

                    <h1>Oportunidade Perfeita para Traçar

                        <br>seus Planos de Empreender e Colocá-los em Ação</h1>

                </div>

            </div>

            <div class="row">

                <div class="landing-description__main offset-md-3 col-md-6 col-sm-12">

                    <h2>Nesse treinamento você vai:</h2>

                </div>

            </div>

            <div class="landing-description__list row">

                <div class="list__item--1 col-md-5 offset-sm-1 col-sm-10">

                    <div class="list__item--img">

                        <img src="<?= $theme_folder;?>/assets/img/icon/coracao.png" alt="">

                    </div>

                    <div class="list__item--text">

                        <p class="list__item--title">IDENTIFICAR PROFUNDAMENTE COMO ESTÁ E COMO DESEJA A SUA VIDA PROFISSIONAL</p>

                        <p class="list__item--description">Você vai sair com clareza do seu estado atual e de onde você quer chegar.</p>

                    </div>

                </div>

                <div class="list__item--2 col-md-5 offset-sm-1 col-sm-10">

                    <div class="list__item--text">

                        <p class="list__item--title">TER UM PLANO DE AÇÃO PARA TE APROXIMAR DO SEU OBJETIVO</p>



                        <p class="list__item--description">Você vai desenhar os próximos passos de forma simples e prática, para impulsionar sua caminhada na
                            conquista de seus objetivos. </p>

                    </div>

                    <div class="list__item--img">

                        <img src="<?= $theme_folder;?>/assets/img/icon/caderno.png" alt="">

                    </div>

                </div>

                <div class="list__item--3 col-md-5 offset-sm-1 col-sm-10">

                    <div class="list__item--img">

                        <img src="<?= $theme_folder;?>/assets/img/icon/estrela.png" alt="">

                    </div>

                    <div class="list__item--text">

                        <p class="list__item--title">BÔNUS GRATUITO

                        </p>

                        <p class="list__item--description">Se você assistir até o final, vai ter acesso a um guia de implementação da ferramenta Roda da Vida.</p>

                    </div>

                </div>

                <div class="list__item--4 col-md-5 offset-sm-1 col-sm-10">

                    <div class="list__item--text">

                        <p class="list__item--title">SUAS PERGUNTAS RESPONDIDAS AO VIVO</p>

                        <p class="list__item--description">Ao final do treinamento estarei 100% comprometido em esclarecer suas dúvidas. Então, papel e caneta
                            na mão!</p>

                    </div>

                    <div class="list__item--img">

                        <img src="<?= $theme_folder;?>/assets/img/icon/conversa.png" alt="">

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="mailing-list offset-md-3 col-md-6 offset-sm-1 col-sm-10">

                    <p>

                        <span class="highlight">cadastre seu melhor email abaixo</span>

                        <br>para reservar seu lugar nessa sala ao vivo!</p>

                    <div class="mailing-list__input">

                        <div class="input-group">



                            <!-- Begin MailChimp Signup Form -->

                            <div id="mc_embed_signup">

                                <form action="https://rafaribeiro.us17.list-manage.com/subscribe/post?u=df9ab4b863ab4a55fa168caf6&amp;id=f0b21dcfa4" method="post"
                                    id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                    novalidate>

                                    <div id="mc_embed_signup_scroll">

                                        <span class="mc-field-group">



                                            <input type="email" placeholder="Qual o seu e-mail?" name="EMAIL" class="mailing-list__input--email required email" id="mce-EMAIL">

                                        </span>

                                        <br>

                                        <span class="clear">

                                            <input type="submit" value="Cadastrar" name="subscribe" id="mc-embedded-subscribe" class="mailing-list__input--button button">

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

        </div>

        </div>

    </section>


    <?php wp_footer();?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/dd1b0d59f0.js"></script>



</body>



</html>