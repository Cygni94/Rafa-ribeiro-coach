//INICIO Aperte o play - Bônus
function rafaribeiro_bonus_customizer($wp_customize)
{
    //bonus section panel
    $wp_customize->add_panel('rafaribeiro_bonus_options', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Bônus', 'Rafa Ribeiro Coach'),
    ));
    $wp_customize->add_section('bonus_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 50,
    ));
    //Hide Index bonus Section
    $wp_customize->add_setting(
        'bonus_options[bonus_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_section_head',
            'type' => 'checkbox',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_title]',
        array(
            'default' => __('bonus', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_title]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_section_head',
            'type' => 'text',
        )
    );
    //bonus section one
    $wp_customize->add_section('bonus_item_one', array(
        'title' => __('bonus 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_setting('bonus_options[bonus_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/15---icone-computador.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 1', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_one',
                'settings' => 'bonus_options[bonus_one_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_one_title]',
        array(
            'default' => __('SITE PROFISSIONAL', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_one_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_one',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_one_subtitle]',
        array(
            'default' => __('como construir seu site em apenas 01 hora', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_one_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_one',
            'type' => 'textarea',
        )
    );
    //Second bonus
    $wp_customize->add_section('bonus_item_two', array(
        'title' => __('bonus 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 200,
    ));
    $wp_customize->add_setting('bonus_options[bonus_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/16---icone-dinheiro.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 2', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_two',
                'settings' => 'bonus_options[bonus_two_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_two_title]',
        array(
            'default' => __('CONTROLE FINANCEIRO', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_two_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_two',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_two_subtitle]',
        array(
            'default' => __('receba planilhas prontas para controlar suas finanças de forma prática', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_two_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_two',
            'type' => 'textarea',
        )
    );
    //Third bonus section
    $wp_customize->add_section('bonus_item_three', array(
        'title' => __('bonus 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/17---icone-pincel.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 3', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_three',
                'settings' => 'bonus_options[bonus_three_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_three_title]',
        array(
            'default' => __('IDENTIDADE VISUAL', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_three_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_three',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_three_subtitle]',
        array(
            'default' => __('crie suas artes de forma gratuita e fácil', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_three_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_three',
            'type' => 'textarea',
        )
    );
    //Fourth bonus section
    $wp_customize->add_section('bonus_item_four', array(
        'title' => __('bonus 4', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_four_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/18---icone-videos.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_four_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 4', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_four',
                'settings' => 'bonus_options[bonus_four_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_four_title]',
        array(
            'default' => __('VÍDEOS DE QUALIDADE', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_four_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_four',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_four_subtitle]',
        array(
            'default' => __('aprenda a editar vídeos para suas redes sociais', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_four_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_four',
            'type' => 'textarea',
        )
    );
    //Fifth bonus section
    $wp_customize->add_section('bonus_item_five', array(
        'title' => __('bonus 5', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('bonus_options[bonus_five_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/19---icone-anotacao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_five_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 5', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_five',
                'settings' => 'bonus_options[bonus_five_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_five_title]',
        array(
            'default' => __('TAREFAS EM DIA', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_five_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_five',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_five_subtitle]',
        array(
            'default' => __('aprenda como gerenciar suas tarefas e aumentar a sua produtividade', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_five_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_five',
            'type' => 'textarea',
        )
    );
    //Sixth bonus section
    $wp_customize->add_section('bonus_item_six', array(
        'title' => __('bonus 6', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_six_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/20---icone-calculadora.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_six_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 6', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_six',
                'settings' => 'bonus_options[bonus_six_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_six_title]',
        array(
            'default' => __('DESMISTIFICANDO A CONTABILIDADE', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_six_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_six',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_six_subtitle]',
        array(
            'default' => __('o que você precisa saber nessa fase inicial', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_six_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_six',
            'type' => 'textarea',
        )
    );
    //seventh bonus section
    $wp_customize->add_section('bonus_item_seven', array(
        'title' => __('bonus 7', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('bonus_options[bonus_seven_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/21---icone-livro.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_seven_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 7', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_seven',
                'settings' => 'bonus_options[bonus_seven_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_seven_title]',
        array(
            'default' => __('BIBLIOGRAFIA DO CURSO', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_seven_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_seven',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_seven_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_seven_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_seven',
            'type' => 'textarea',
        )
    );
    //eighth bonus section
    $wp_customize->add_section('bonus_item_eight', array(
        'title' => __('bonus 8', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_eight_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/22---icone-mapa.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_eight_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 8', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_eight',
                'settings' => 'bonus_options[bonus_eight_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_eight_title]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_eight_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_eight',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_eight_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_eight_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_eight',
            'type' => 'textarea',
        )
    );
    //nineth bonus section
    $wp_customize->add_section('bonus_item_nine', array(
        'title' => __('bonus 9', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_nine_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/23---icone-som.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_nine_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 9', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_nine',
                'settings' => 'bonus_options[bonus_nine_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_nine_title]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_nine_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_nine',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_nine_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_nine_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_nine',
            'type' => 'textarea',
        )
    );
    //tenth bonus section
    $wp_customize->add_section('bonus_item_ten', array(
        'title' => __('bonus 10', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_ten_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/24---icone-trofeu.png',
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
        'bonus_options[bonus_ten_title]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_ten_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_ten',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_ten_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_ten_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_ten',
            'type' => 'textarea',
        )
    );

    function rafaribeiro_bonus_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
    }
    add_action('customize_register', 'rafaribeiro_bonus_customizer');

    function bonus_setup_data()
    {
    return $bonus_options = array(
        //bonus section settings
        'bonus_section_enabled' => '',
        'bonus_title' => __('bonus', 'Rafa Ribeiro Coach'),
        'bonus_one_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_one_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_one_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_two_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_two_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_two_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_three_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_three_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_three_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_four_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_four_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_four_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_five_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_five_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_five_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_six_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_six_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_six_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_seven_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_seven_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_seven_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_eight_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_eight_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_eight_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_nine_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_nine_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_nine_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_ten_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_ten_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_ten_image' => __('', 'Rafa Ribeiro Coach'),
    );
}
