	
<?php /* Template Name: Landing Page */ ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title>
        <?php wp_title(''); ?>
    </title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/landing.css" type="text/css"/>

    <?php wp_head(); ?>
</head>

<body>

    <section class="landing-callout">
        <div class="container">
            <div class="row">
                <div class="landing-callout__header col-12">
                    <span>treinamento 100% gratuito | ao vivo | online</span>
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
                        <img src="<?php bloginfo('template_directory'); ?>/img/like.png" alt="">
                    </div>
                    <div class="landing-callout__list--description">
                        <p>para quem:
                            <br>. quer ter uma vida que faça sentido,
                            <br> alinhada com o seu propósito.</p>
                        <p>. está se sentindo desalinhado, em um
                            <br>trabalho que não te representa.</p>
                        <p>. quer ter clareza do que poderia fazer
                            <br>se sentir mais vivo profissionalmente.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="landing-callout__list--icon">
                        <img src="<?php bloginfo('template_directory'); ?>/img/relogio.png" alt="">
                    </div>
                    <div class="landing-callout__list--date">
                        <p>08 de janeiro de 2018
                            <br>segunda-feira às 20:00</p>
                    </div>
                    <br>
                    <div class="landing-callout__list--icon">
                        <img src="<?php bloginfo('template_directory'); ?>/img/camera.png" alt="">
                    </div>
                    <div class="landing-callout__list--live">
                        <p>transmissão Ao Vivo e Online</p>
                    </div>
                </div>
                <div class="offset-md-2"></div>
            </div>
            <br>
            <div class="row">
                <div class="mailing-list offset-md-3 col-md-6 offset-sm-1 col-sm-10">
                    <p>
                        <span class="highlight">cadastre seu melhor email abaixo</span>
                        <br>para reservar seu lugar nessa sala ao vivo!</p>
                    <div class="mailing-list__input">
                        <div class="input-group">
                            <input type="email" class="mailing-list__input--email" placeholder="seu melhor email">
                            <br>
                            <span class="input-group-btn">
                                <button class="mailing-list__input--button" type="button">reservar meu lugar agora!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-description">
        <div class="container">
            <div class="row">
                <div class="landing-description__header offset-md-3 col-md-6 col-sm-12">
                    <h1>oportunidade perfeita para traçar
                        <br>seus objetivos e colocá-los em ação</h1>
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
                        <img src="<?php bloginfo('template_directory'); ?>/img/coracao.png" alt="">
                    </div>
                    <div>
                        <p class="list__item--title">identificar como estão as
                            <br>principais áreas da vida</p>
                        <p class="list__item--description">você vai sair com clareza do
                            <br>seu estado atual e de onde
                            <br>você quer chegar.</p>
                    </div>
                </div>
                <div class="list__item--2 col-md-5 offset-sm-1 col-sm-10">
                    <div>
                        <p class="list__item--title">ter um plano de ação para te
                            <br>aproximar do seu objetivo</p>
                        <p class="list__item--description">você vai desenhar os próximos
                            <br>passos de forma simples e
                            <br>prática, para impulsionar sua
                            <br>caminhada na conquista
                            <br>de seus objetivos.</p>
                    </div>
                    <div class="list__item--img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/caderno.png" alt="">
                    </div>
                </div>
                <div class="list__item--3 col-md-5 offset-sm-1 col-sm-10">
                    <div class="list__item--img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/estrela.png" alt="">
                    </div>
                    <div>
                        <p class="list__item--title">bônus gratuito
                            <br>
                            <span class="blank">.</span>
                        </p>
                        <p class="list__item--description">se você assistir até o final, vai
                            <br>ter acesso a um guia de
                            <br>implementação da ferramenta
                            <br>Roda da Vida.</p>
                    </div>
                </div>
                <div class="list__item--4 col-md-5 offset-sm-1 col-sm-10">
                    <div>
                        <p class="list__item--title">suas perguntas
                            <br>respondidas ao vivo</p>
                        <p class="list__item--description">ao final do treinamento estarei
                            <br>100% comprometido em
                            <br>esclarecer suas dúvidas.
                            <br>então, papel e caneta na mão!</p>
                    </div>
                    <div class="list__item--img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/conversa.png" alt="">
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
                            <input type="email" class="mailing-list__input--email" placeholder="seu melhor email">
                            <br>
                            <span class="input-group-btn">
                                <button class="mailing-list__input--button" type="button">reservar meu lugar agora!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/dd1b0d59f0.js"></script>
    <script src="script.js"></script>

    <?php wp_footer(); ?>

</body>

</html> 