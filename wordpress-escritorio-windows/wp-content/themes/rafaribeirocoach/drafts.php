$wp_customize->add_section('itens_dos_treinamentos_aperteOPlay', array(
        'title' => __('Itens do treinamento', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_infoAperteoPlay_options',
        'priority' => 60,
    ));
        $wp_customize->add_setting(
            'itens_options[itens_one_label]',
            array(
                'default' => __('Treinamento Completo Aperte o Play', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_one_label]',
            array(
                'label' => __('Item destacado', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_two_label]',
            array(
                'default' => __('Consultoria Individual', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_two_label]',
            array(
                'label' => __('Demais itens', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_three_label]',
            array(
                'default' => __('Mini curso  - Tarefas em Dia', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_three_label]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_four_label]',
            array(
                'default' => __('Mini Curso - Vídeo Profissional', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_four_label]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_five_label]',
            array(
                'default' => __('Mini curso  - Identidade Visual', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_five_label]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_six_label]',
            array(
                'default' => __('Vídeo Desmistificando a Contabilidade', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_six_label]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_seven_label]',
            array(
                'default' => __('Mini curso  - Vídeos de qualidade', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_seven_label]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_eight_label]',
            array(
                'default' => __('Desafios Individuais', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_eight_label]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'itens_options[itens_nine_label]',
            array(
                'default' => __('Acesso a Comunidade Vip exclusiva para alunos', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'itens_options[itens_nine_label]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'itens_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
    
        function rafaribeiro_datasAperteOPlay_sanitize_html($input)
        {
            return force_balance_tags($input);
        }
        }
        add_action('customize_register', 'rafaribeiro_datasAperteOPlay_customizer');

        function datasAperteOPlay_setup_data()
        {
        return $datasAperteOPlay_options = array(
        );
    }
