
//INICIO Aperte o play - Horarios
function rafaribeiro_horariosAperteOPlay_customizer($wp_customize)
{

    //horarios section panel
    $wp_customize->add_panel('rafaribeiro_horariosAperteOPlay_options', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Horarios', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('horarios_dos_treinamentos_aperteOPlay', array(
        'title' => __('Horarios dos treinamentos', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_horariosAperteOPlay_options',
        'priority' => 50,
    ));

    //Hide Index horarios Section
    $wp_customize->add_setting(
        'horarios_options[horarios_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'horarios_options[horarios_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'horarios_dos_treinamentos_aperteOPlay',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'horarios_options[horarios_label]',
        array(
            'default' => __('Horarios dos treinamentos', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_horariosAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'horarios_options[horarios_label]',
        array(
            'label' => __('Cabeçalho', 'Rafa Ribeiro Coach'),
            'section' => 'horarios_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('horarios_options[horarios_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/25---icone-calendario.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'horarios_options[horarios_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Ícone das horarios', 'Rafa Ribeiro Coach'),
                'section' => 'horarios_dos_treinamentos_aperteOPlay',
                'settings' => 'horarios_options[horarios_one_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
        array(
            'default' => __('', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_horariosAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
        array(
            'label' => __('Horarios', 'Rafa Ribeiro Coach'),
            'section' => 'horarios_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
        array(
            'default' => __('', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_horariosAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
        array(
            'label' => __('', 'Rafa Ribeiro Coach'),
            'section' => 'horarios_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );
    

    function rafaribeiro_horariosAperteOPlay_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
}
add_action('customize_register', 'rafaribeiro_horariosAperteOPlay_customizer');

function horariosAperteOPlay_setup_horario()
{
    return $horariosAperteOPlay_options = array(
        //horarios section settings
        'horarios_section_enabled' => '',
        'horarios_label' => __('', 'Rafa Ribeiro Coach'),
        'horarios_dos_treinamentos_aperteOPlay_one' => __('', 'Rafa Ribeiro Coach'),
        'horarios_dos_treinamentos_aperteOPlay_two' => __('', 'Rafa Ribeiro Coach'),      
        'horarios_one_image' => __('', 'Rafa Ribeiro Coach'),
    );
}

$wp_customize->add_control(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
        array(
            'label' => __('', 'Rafa Ribeiro Coach'),
            'section' => 'horarios_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );