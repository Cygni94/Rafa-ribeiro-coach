<!DOCTYPE html>
<html lang="en">
<head>
    <?php $theme_folder = get_template_directory_uri(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Rafa Ribeiro Coaching</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= $theme_folder; ?>/assets/css/style.css">

    <?php wp_head(); ?>
</head>
<body>

<header class="header">
        <nav class="nav navbar navbar-dark navbar-expand-lg justify-content-between container">
            <div class="nav__brand">
                <a class="navbar-brand" href="index.html">
                    <img class="nav__brand-logo" src="<?= $theme_folder; ?>/assets/img/brand/logo_menu.png" alt="">
                </a>
            </div>
            <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav__menu collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
                    <li class="nav__item nav-item active">
                        <a class="nav-link" href="papo.php">papo momento da virada</a>
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
