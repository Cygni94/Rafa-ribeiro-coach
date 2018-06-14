<?php /* Template Name: Evento */?>
<?php $theme_folder = get_template_directory_uri();?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="rafaribeiro.ico" />

    <title>Rafael Ribeiro Coaching - Desperte seu Herói</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/calltoaction.css">
    <?php wp_head();?>
</head>

<body class="calltoaction">

    <section class="landing-callout">
        <div class="container">
            <div class="row">
                <div class="landing-callout__header col-12">
                    <span>treinamento 100% gratuito | ao vivo | online</span>
                </div>
                <div class="landing-callout__main col-12">
                    <span>Como
                        <span class="highlight">ter clareza </span>
                        dos próximos
                        <br>passos
                        <span class="highlight">para empreender</span>
                    </span>
                </div>
            </div>
            <div class="calltoaction__callout row">
                <div class="col-12">
                    <div>
                        <span class="calltoaction__lead">o treinamento vai começar</span>
                    </div>
                    <br>
                    <div>
                        <span class="calltoaction__headline">

<?php
$evento_options = evento_setup_data();
$evento_setting = wp_parse_args(get_option('evento_options', array()), $evento_options);
{ ?>
                    <p><?php echo $evento_setting['data_evento']; ?></p>
                    <p><?php echo $evento_setting['hora_evento']; ?></p>
            <?php } ?>
                        </span>
                    </div>
                </div>
            </div>

            <?php wp_footer();?>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
                crossorigin="anonymous"></script>
</body>

</html>