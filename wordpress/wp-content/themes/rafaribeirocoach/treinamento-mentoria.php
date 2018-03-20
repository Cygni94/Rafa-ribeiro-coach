<?php /* Template Name: Treinamento Mentoria */?>
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

    <?php wp_head();?>
</head>

<body class="container mentoria__page">
    <main class="row">
        <div class="treinamento__wrapper col-md-4 offset-md-1">
            <div class="treinamento__logo">
                <img src="<?php bloginfo('template_url');?>/assets/img/brand/mentoria.png" alt="momento da virada">
            </div>
            <h1>Este treinamento não está disponível no momento :/</h1>
            <p>Deixe seu e-mail abaixo e seja avisado quando uma nova turma estiver aberta.</p>
            <button type="button" class="btn" data-toggle="modal" data-target="#treinamento-modal">
                Me avise quando estiver disponível!
            </button>

            <!-- Modal -->
            <div class="modal fade" id="treinamento-modal" tabindex="-1" role="dialog" aria-labelledby="treinamento-modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header treinamento-modal__header">
                            <div class="modal-title-wrapper">
                                <h5 class="modal-title" id="treinamento-modalLabel">Maravilha!</h5>
                                <h6 class="modal-subtitle">Falta pouco para ser avisado sobre a próxima turma!</h6>
                            </div>
                        </div>
                        <div class="modal-body">
                            <!-- Begin MailChimp Signup Form -->
                            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                            <style type="text/css">
                                #mc_embed_signup {
                                    background: #fff;
                                    clear: left;
                                    font: 14px Helvetica, Arial, sans-serif;
                                }

                                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                            </style>
                            <div id="mc_embed_signup">
                                <form action="https://rafaribeiro.us17.list-manage.com/subscribe/post?u=df9ab4b863ab4a55fa168caf6&amp;id=f0b21dcfa4" method="post"
                                    id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                    novalidate>
                                    <div id="mc_embed_signup_scroll">

                                        <div class="mc-field-group">
                                            <input type="text" value="" placeholder="Qual seu nome?" name="FNAME" class="" id="mce-FNAME">
                                        </div>
                                        <div class="mc-field-group">
                                            <input type="email" value="" placeholder="Qual seu email?" name="EMAIL" class="required email" id="mce-EMAIL">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_df9ab4b863ab4a55fa168caf6_f0b21dcfa4" tabindex="-1" value="">
                                        </div>
                                        <div class="clear" data-toggle="modal" data-target="#treinamento-success-modal">
                                            <input type="submit" value="Quero ser avisado!
                                            " name="subscribe" id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!--End mc_embed_signup-->

                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="treinamento-success-modal" tabindex="-1" role="dialog" aria-labelledby="treinamento-modalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div>
                                    <img class="success-modal__img" src="<?= $theme_folder;?>/assets/img/brand/ok.png" alt="Ok!">
                                </div>
                                <div>
                                    <h3>Parabéns!</h3>
                                    <br>
                                    <h6>Você será avisado quando uma nova turma for aberta.</h6>
                                </div>
                            </div>
                            <div class="success-btn__wrapper">
                                <button type="button" class="btn success-btn" data-toggle="modal" data-target="#treinamento-success-modal" data-dismiss="modal">
                                    OK
                                </button>
                            </div>
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