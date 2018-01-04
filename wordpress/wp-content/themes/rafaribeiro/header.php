<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title>
        <?php wp_title(''); ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );?>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="nav navbar navbar-dark navbar-expand-lg justify-content-between container">
            <div class="nav__brand">
                <a class="navbar-brand" href="#">
                    <img class="nav__brand-logo" src="<?php bloginfo('template_directory'); ?>/img/rafa_ribeiro_logo_menu.png" alt="">
                </a>
            </div>
            <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav__menu collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
                    <li class="nav__item nav-item active">
                        <a class="nav-link" href="#papo-momento-da-virada">papo momento da virada</a>
                        </a>
                    </li>
                    <li class="nav__item nav-item active">
                        <a class="nav-link" href="#cursos">treinamentos</a>
                    </li>
                    <li class="nav__item nav-item active">
                        <a class="nav-link" href="#">contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>