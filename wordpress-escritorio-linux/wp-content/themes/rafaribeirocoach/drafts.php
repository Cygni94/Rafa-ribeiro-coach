//INICIO Aperte o play - Itens do treinamento
function rafaribeiro_itensAperteOPlay_customizer($wp_customize)
{

    //itens section panel
    $wp_customize->add_panel('rafaribeiro_itensAperteOPlay_options', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Itens do Aperte o Play', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('itens_dos_treinamentos_aperteOPlay', array(
        'title' => __('Itens do treinamento', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_itensAperteOPlay_options',
        'priority' => 50,
    ));

    //Hide Index itens Section
    $wp_customize->add_setting(
        'itens_options[itens_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'itens_options[itens_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'itens_dos_treinamentos_aperteOPlay',
            'type' => 'checkbox',
        )
    );
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
            'label' => __('Item', 'Rafa Ribeiro Coach'),
            'section' => 'itens_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'itens_options[itens_dos_treinamentos_aperteOPlay]',
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
            'label' => __('Item', 'Rafa Ribeiro Coach'),
            'section' => 'itens_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'itens_options[itens_dos_treinamentos_aperteOPlay]',
        array(
            'default' => __('Mini curso  - Tarefas em Dia', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_itensAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    
    function rafaribeiro_itensAperteOPlay_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
    }
    add_action('customize_register', 'rafaribeiro_itensAperteOPlay_customizer');

    function itensAperteOPlay_setup_data()
    {
    return $itensAperteOPlay_options = array(
        //itens section settings
        'itens_section_enabled' => '',
        'itens_label' => __('', 'Rafa Ribeiro Coach'),
        'itens_dos_treinamentos_aperteOPlay_one' => __('', 'Rafa Ribeiro Coach'),
        'itens_dos_treinamentos_aperteOPlay_two' => __('', 'Rafa Ribeiro Coach'),            
    );
}