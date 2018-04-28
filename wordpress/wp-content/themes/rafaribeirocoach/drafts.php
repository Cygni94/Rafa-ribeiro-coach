
//PÁGINA TREINAMENTOS
function pagina_treinamentos_customizer($wp_customize)
{

    $wp_customize->add_panel('pagina_treinamentos', array(
        'priority' => 113,
        'capability' => 'edit_theme_options',
        'title' => __('Página Treinamentos', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('data_do_treinamento', array(
        'title' => __('Data e hora do evento', 'Rafa Ribeiro Coach'),
        'panel' => 'pagina_treinamentos',
        'priority' => 50,
    ));
    $wp_customize->add_setting(
            'datas_options[data_treinamento]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'pagina_treinamentos_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'datas_options[data_treinamento]',
            array(
                'label' => __('Data', 'Rafa Ribeiro Coach'),
                'section' => 'data_do_treinamento',
                'type' => 'date',
            )
        );
        $wp_customize->add_setting(
            'datas_options[hora_treinamento]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'pagina_treinamentos_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'datas_options[hora_treinamento]',
            array(
                'label' => __('Horário', 'Rafa Ribeiro Coach'),
                'section' => 'data_do_treinamento',
                'type' => 'time',
            )
        );
        function pagina_treinamentos_sanitize_html($input)
        {
            return force_balance_tags($input);
        }
        }
        add_action('customize_register', 'pagina_treinamentos_customizer');

        function pagina_treinamentos_setup_data()
        {
        return $pagina_treinamentos = array(
        );
    }


