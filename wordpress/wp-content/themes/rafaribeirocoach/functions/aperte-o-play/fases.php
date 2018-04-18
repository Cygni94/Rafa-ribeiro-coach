//INICIO Aperte o play - Fases
function rafaribeiro_fases_customizer($wp_customize)
{

    //fase section panel
    $wp_customize->add_panel('rafaribeiro_fase_options', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Fases', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('fase_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 50,
    ));

    //Hide Index fase Section
    $wp_customize->add_setting(
        'fase_options[fase_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'fase_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_label]',
        array(
            'default' => __('fases', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_label]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'fase_section_head',
            'type' => 'text',
        )
    );

    //fase section one
    $wp_customize->add_section('fase_item_one', array(
        'title' => __('fase 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_setting('fase_options[fase_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/07---icone-play.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 1', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_one',
                'settings' => 'fase_options[fase_one_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'fase_options[fase_one_label]',
        array(
            'default' => __('você ame e acredite.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_one_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_one',
            'type' => 'text',
        )
    );

    //Second fase
    $wp_customize->add_section('fase_item_two', array(
        'title' => __('fase 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting('fase_options[fase_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/08---icone-coracao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 2', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_two',
                'settings' => 'fase_options[fase_two_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_two_label]',
        array(
            'default' => __('você utilize seus talentos.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_two_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_two',
            'type' => 'text',
        )
    );

    //Third fase section
    $wp_customize->add_section('fase_item_three', array(
        'title' => __('fase 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/09---icone-visao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 3', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_three',
                'settings' => 'fase_options[fase_three_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_three_label]',
        array(
            'default' => __('traga mais tempo para você e sua família.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_three_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_three',
            'type' => 'text',
        )
    );
    //Fourth fase section
    $wp_customize->add_section('fase_item_four', array(
        'title' => __('fase 4', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_four_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/10---icone-maos.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_four_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 4', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_four',
                'settings' => 'fase_options[fase_four_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_four_label]',
        array(
            'default' => __('traga o retorno financeiro merecido.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_four_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_four',
            'type' => 'text',
        )
    );
    //Fifth fase section
    $wp_customize->add_section('fase_item_five', array(
        'title' => __('fase 5', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_five_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/11---icone-aquarela.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_five_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 5', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_five',
                'settings' => 'fase_options[fase_five_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_five_label]',
        array(
            'default' => __('transforme a vida de milhares de pessoas.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_five_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_five',
            'type' => 'text',
        )
    );
    //Sixth fase section
    $wp_customize->add_section('fase_item_six', array(
        'title' => __('fase 6', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_six_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/12---icone-anotacao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_six_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 6', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_six',
                'settings' => 'fase_options[fase_six_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_six_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_six_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_six',
            'type' => 'text',
        )
    );

    //seventh fase section
    $wp_customize->add_section('fase_item_seven', array(
        'title' => __('fase 7', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_seven_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/13---icone-retorno.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_seven_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 7', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_seven',
                'settings' => 'fase_options[fase_seven_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_seven_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_seven_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_seven',
            'type' => 'text',
        )
    );

    //eighth fase section
    $wp_customize->add_section('fase_item_eight', array(
        'title' => __('fase final', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_eight_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/14---icone-celebracao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_eight_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase final', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_eight',
                'settings' => 'fase_options[fase_eight_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_eight_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_eight_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_eight',
            'type' => 'text',
        )
    );

    function rafaribeiro_fases_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
    }
    add_action('customize_register', 'rafaribeiro_fases_customizer');

    function fases_setup_data()
    {
    return $fases_options = array(
        //fase section settings
        'fase_section_enabled' => '',
        'fase_label' => __('fases', 'Rafa Ribeiro Coach'),
        'fase_one_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_one_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_two_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_two_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_three_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_three_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_four_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_four_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_five_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_five_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_six_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_six_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_seven_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_seven_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_eight_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_eight_image' => __('', 'Rafa Ribeiro Coach'),
    );
}
