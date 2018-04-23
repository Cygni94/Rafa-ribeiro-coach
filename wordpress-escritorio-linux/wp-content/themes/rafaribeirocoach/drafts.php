//valor section panel
        $wp_customize->add_section('valor_dos_treinamentos_aperteOPlay', array(
            'title' => __('Valor dos treinamentos', 'Rafa Ribeiro Coach'),
            'panel' => 'rafaribeiro_infoAperteoPlay_options',
            'priority' => 55,
        ));
        $wp_customize->add_setting(
            'valor_options[valor_label]',
            array(
                'default' => __('valor dos treinamentos', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_valorAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'valor_options[valor_label]',
            array(
                'label' => __('Cabeçalho', 'Rafa Ribeiro Coach'),
                'section' => 'valor_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'valor_options[valor_dos_treinamentos_aperteOPlay_one]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_valorAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'valor_options[valor_dos_treinamentos_aperteOPlay_one]',
            array(
                'label' => __('valor', 'Rafa Ribeiro Coach'),
                'section' => 'valor_dos_treinamentos_aperteOPlay',
                'type' => 'date',
            )
        );
        $wp_customize->add_setting(
            'valor_options[valor_dos_treinamentos_aperteOPlay_two]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_valorAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'valor_options[valor_dos_treinamentos_aperteOPlay_two]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'valor_dos_treinamentos_aperteOPlay',
                'type' => 'date',
            )
        );
        $wp_customize->add_setting(
            'horarios_options[horarios_label]',
            array(
                'default' => __('Horário:', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_valorAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'horarios_options[horarios_label]',
            array(
                'label' => __('Cabeçalho', 'Rafa Ribeiro Coach'),
                'section' => 'valor_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_valorAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
            array(
                'label' => __('Início', 'Rafa Ribeiro Coach'),
                'section' => 'valor_dos_treinamentos_aperteOPlay',
                'type' => 'time',
            )
        );
        $wp_customize->add_setting(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_valorAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
            array(
                'label' => __('Término', 'Rafa Ribeiro Coach'),
                'section' => 'valor_dos_treinamentos_aperteOPlay',
                'type' => 'time',
            )
        );
