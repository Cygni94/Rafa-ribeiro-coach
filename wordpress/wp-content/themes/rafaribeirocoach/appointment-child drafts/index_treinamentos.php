<?php 
$appointment_options=theme_setup_data(); 
$service_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($service_setting['service_section_enabled'] == 0 ) { ?>
<section class="Service-section cursos" id="treinamentos">
    <div class="container">
        <div class="row">
            <div class="cursos__section-header col-12">
                <div class="hr"></div>
                <div class="section-heading-title">
                    <span class="cursos__section-title" style="color: <?php echo get_theme_mod('header_color', '#000000'); ?>;">
                        <?php echo $service_setting['service_title']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="cursos__container container">
        <div class="row" style="justify-content: space-between">
            <div class="cursos__item col-md-3 offset-1 offset-md-0 col-10 treinamento-1" style="background-color: <?php echo $service_setting['header_textcolor']; ?>">
                <a class="curso-link">
                    <?php echo $service_setting['service_one_title']; ?>
                </a>
            </div>
            <div class="cursos__item col-md-3 offset-1 offset-md-0 col-10">
                <a class="curso-link">
                    <?php echo $service_setting['service_two_title']; ?>
                </a>
            </div>
            <div class="cursos__item col-md-3 offset-1 offset-md-0 col-10">
                <a class="curso-link">
                    <?php echo $service_setting['service_three_title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /HomePage Service Section -->
<?php } ?>