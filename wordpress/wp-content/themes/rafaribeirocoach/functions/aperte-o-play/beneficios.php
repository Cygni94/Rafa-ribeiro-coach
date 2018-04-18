//INICIO Aperte o play - Benefícios
function rafaribeiro_beneficios_customizer($wp_customize)
{

    //beneficio section panel
    $wp_customize->add_panel('rafaribeiro_beneficio_options', array(
        'priority' => 200,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Beneficios', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('beneficio_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 50,
    ));

    //Hide Index beneficio Section
    $wp_customize->add_setting(
        'beneficio_options[beneficio_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_label]',
        array(
            'default' => __('beneficios', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_label]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_section_head',
            'type' => 'text',
        )
    );

    //beneficio section one
    $wp_customize->add_section('beneficio_item_one', array(
        'title' => __('beneficio 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_setting('beneficio_options[beneficio_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/01---icone-coracao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 1', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_one',
                'settings' => 'beneficio_options[beneficio_one_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'beneficio_options[beneficio_one_label]',
        array(
            'default' => __('você ame e acredite.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_one_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_one',
            'type' => 'text',
        )
    );

    //Second beneficio
    $wp_customize->add_section('beneficio_item_two', array(
        'title' => __('beneficio 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/02---icone-estrela.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 2', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_two',
                'settings' => 'beneficio_options[beneficio_two_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_two_label]',
        array(
            'default' => __('você utilize seus talentos.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_two_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_two',
            'type' => 'text',
        )
    );

    //Third beneficio section
    $wp_customize->add_section('beneficio_item_three', array(
        'title' => __('beneficio 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/03---icone-familia.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 3', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_three',
                'settings' => 'beneficio_options[beneficio_three_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_three_label]',
        array(
            'default' => __('traga mais tempo para você e sua família.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_three_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_three',
            'type' => 'text',
        )
    );
    //Fourth beneficio section
    $wp_customize->add_section('beneficio_item_four', array(
        'title' => __('beneficio 4', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_four_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/04---icone-dinheiro.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_four_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 4', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_four',
                'settings' => 'beneficio_options[beneficio_four_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_four_label]',
        array(
            'default' => __('traga o retorno financeiro merecido.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_four_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_four',
            'type' => 'text',
        )
    );
    //Fifth beneficio section
    $wp_customize->add_section('beneficio_item_five', array(
        'title' => __('beneficio 5', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_five_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/05---icone-personas.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_five_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 5', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_five',
                'settings' => 'beneficio_options[beneficio_five_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_five_label]',
        array(
            'default' => __('transforme a vida de milhares de pessoas.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_five_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_five',
            'type' => 'text',
        )
    );
    //Sixth beneficio section
    $wp_customize->add_section('beneficio_item_six', array(
        'title' => __('beneficio 6', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_six_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/06---icone-borboleta.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_six_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 6', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_six',
                'settings' => 'beneficio_options[beneficio_six_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_six_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_six_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_six',
            'type' => 'text',
        )
    );

    function rafaribeiro_beneficios_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
    }
    add_action('customize_register', 'rafaribeiro_beneficios_customizer');

    function beneficios_setup_data()
    {
    return $beneficios_options = array(
        'beneficio_section_enabled' => '',
        'beneficio_label' => __('beneficios', 'Rafa Ribeiro Coach'),
        'beneficio_one_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_one_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_two_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_two_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_three_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_three_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_four_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_four_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_five_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_five_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_six_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_six_image' => __('', 'Rafa Ribeiro Coach'),
    );
}