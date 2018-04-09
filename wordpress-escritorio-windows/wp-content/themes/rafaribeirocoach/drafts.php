<?php
$depoimento_options = depoimentos_setup_data();
$depoimento_setting = wp_parse_args(get_option('depoimento_options', array()), $depoimento_options);
if ($depoimento_setting['depoimento_section_enabled'] == 0) {?>
<section class="depoimento-section cursos" id="depoimentos">
    <div class="container">
        <div class="row">
            <div class="cursos__section-header col-12">
                <div class="hr"></div>
                <div class="section-heading-title">
                    <span class="cursos__section-title">
                        <?php echo $depoimento_setting['depoimento_title']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="cursos__container container">
        <div class="row" style="justify-content: space-between">
            <div class="cursos__item-1 col-md-3 offset-1 offset-md-0 col-10">
                <a class="curso-link">
                    <?php echo $depoimento_setting['depoimento_one_title']; ?>
                </a>
            </div>
            <div class="cursos__item-2 col-md-3 offset-1 offset-md-0 col-10">
                <a class="curso-link">
                    <?php echo $depoimento_setting['depoimento_two_title']; ?>
                </a>
            </div>
            <div class="cursos__item-3 col-md-3 offset-1 offset-md-0 col-10">
                <a class="curso-link">
                    <?php echo $depoimento_setting['depoimento_three_title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /HomePage depoimento Section -->
<?php }?>