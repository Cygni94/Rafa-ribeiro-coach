<!DOCTYPE html>
<html lang="en">

<head>
    <?php $theme_folder=get_template_directory_uri();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafa Ribeiro Coaching</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= $theme_folder; ?>/assets/css/style.css">
    <?php wp_head();?>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-md navbar-dark justify-content-between" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img class="nav__brand-logo" src="<?= $theme_folder; ?>/assets/img/brand/logo_menu.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu( array( 'theme_location'=> 'primary', 'depth'=> 2, 'container'=> 'div', 'container_class'=> 'collapse navbar-collapse', 'container_id'=> 'bs-example-navbar-collapse-1', 'menu_class'=> 'nav navbar-nav', 'fallback_cb'=> 'WP_Bootstrap_Navwalker::fallback', 'walker'=> new WP_Bootstrap_Navwalker()));
?>
            </div>
        </nav>
    </header>