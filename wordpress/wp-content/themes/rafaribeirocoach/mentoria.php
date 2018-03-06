<?php /* Template Name: Mentoria */?>
<?php $theme_folder = get_template_directory_uri();?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>mentoria - Rafa Ribeiro Coach</title>

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/treinamentos.css">
</head>

<body class="container mentoria__page">
    <main class="row">
        <div class="treinamento__wrapper col-md-4 offset-md-1">
            <div class="treinamento__logo">
                <img src="<?php bloginfo('template_url');?>/assets/img/brand/aperte-o-play.png" alt="momento da virada">
            </div>
            <h1>Este curso não está disponível no momento :/</h1>
            <p>Deixe seu e-mail abaixo e seja avisado quando uma nova turma estiver aberta.</p>
            <button type="button" class="btn" data-toggle="modal" data-target="#treinamento-modal">
                Me avise quando estiver disponível!
            </button>

            <!-- Modal -->
            <div class="modal fade" id="treinamento-modal" tabindex="-1" role="dialog" aria-labelledby="treinamento-modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title-wrapper">
                                <h5 class="modal-title" id="treinamento-modalLabel">Maravilha!</h5>
                                <h6 class="modal-subtitle">Falta pouco para ser avisado sobre a próxima turma!</h6>
                            </div>
                        </div>
                        <div class="modal-body">
                        <?php echo do_shortcode( '[contact-form-7 id="50" title="momento da virada" mc4wp_checkbox]' ); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div class="modal fade" id="treinamento-success-modal" tabindex="-1" role="dialog" aria-labelledby="treinamento-modalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="treinamento-modalLabel">Maravilha!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>asdfsadfdfas</p>
                            <p>asdfsadfdfas</p>
                            <p>asdfsadfdfas</p>
                            <p>asdfsadfdfas</p>
                            <p>asdfsadfdfas</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-toggle="modal" data-target="#treinamento-success-modal" data-dismiss="modal">
                                Ok!
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>