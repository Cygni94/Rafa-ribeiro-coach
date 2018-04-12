//tenth bonus section
    $wp_customize->add_section('bonus_item_ten', array(
        'title' => __('bonus 10', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('bonus_options[bonus_ten_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/14---icone-celebracao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_ten_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 10', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_ten',
                'settings' => 'bonus_options[bonus_ten_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'bonus_options[bonus_ten_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_ten_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_ten',
            'type' => 'text',
        )
    );