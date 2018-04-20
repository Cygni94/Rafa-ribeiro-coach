//PÁGINA TREINAMENTOS
function rafaribeiro_treinamentos_customizer($wp_customize)
{

    //treinamento section panel
    $wp_customize->add_panel('rafaribeiro_treinamento_options', array(
        'priority' => 113,
        'capability' => 'edit_theme_options',
        'title' => __('Página Treinamentos', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('data_do_treinamento', array(
        'title' => __('Datas dos treinamentos', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_infoAperteoPlay_options',
        'priority' => 50,
    ));
    $wp_customize->add_setting(
            'datas_options[data_treinamento]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'datas_options[data_treinamento]',
            array(
                'label' => __('Datas', 'Rafa Ribeiro Coach'),
                'section' => 'data_do_treinamento',
                'type' => 'date',
            )
        );


    //Hide Index treinamento Section
    $wp_customize->add_setting(
        'treinamento_options[treinamento_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'treinamento_options[treinamento_title]',
        array(
            'default' => __('Conheça nossos treinamentos', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_title]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_head',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        'treinamento_options[treinamento_description]',
        array(
            'label' => __('Description', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_head',
            'type' => 'text',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
        )
    );

    //treinamento section one
    $wp_customize->add_section('treinamento_section_one', array(
        'title' => __('Treinamento 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting(
        'treinamento_options[treinamento_one_title]',
        array(
            'default' => __('Momento da virada', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_one_title]',
        array(
            'label' => __('Nome do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_one',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'treinamento_options[treinamento_one_link]',
        array(
            'default' => __('https://www.rafaribeiro.com.br/', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_one_link]',
        array(
            'label' => __('Link do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_one',
            'type' => 'text',
        )
    );

    //Second treinamento

    $wp_customize->add_section('treinamento_section_two', array(
        'title' => __('Treinamento 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting(
        'treinamento_options[treinamento_two_title]',
        array(
            'default' => __('Aperte o play', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_two_title]',
        array(
            'label' => __('Nome do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_two',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'treinamento_options[treinamento_two_link]',
        array(
            'default' => __('https://www.rafaribeiro.com.br/', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_two_link]',
        array(
            'label' => __('Link do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_one',
            'type' => 'text',
        )
    );

    //Third treinamento section
    $wp_customize->add_section('treinamento_section_three', array(
        'title' => __('Treinamento 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting(
        'treinamento_options[treinamento_three_title]',
        array(
            'default' => __('Mentoria', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_three_title]',
        array(
            'label' => __('Nome do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_three',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'treinamento_options[treinamento_three_link]',
        array(
            'default' => __('https://www.rafaribeiro.com.br/', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_three_link]',
        array(
            'label' => __('Link do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_one',
            'type' => 'text',
        )
    );

    function rafaribeiro_treinamentos_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
    }
    add_action('customize_register', 'rafaribeiro_treinamentos_customizer');

    //INICIO CUSTOMIZER
    class Treinamento_Customize
    {
    public static function register($wp_customize)
    {
        //1. Define a new section (if desired) to the Theme Customizer
        $wp_customize->add_section('mytheme_options',
            array(
                'title' => __('MyTheme Options', 'Rafa Ribeiro Coach'), //Visible title of section
                'priority' => 35, //Determines what order this appears in
                'capability' => 'edit_theme_options', //Capability needed to tweak
                'section' => 'Treinamentos',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'Rafa Ribeiro Coach'), //Descriptive tooltip
            )
        );

        //2. Register new settings to the WP database...
        $wp_customize->add_setting('treinamento_backgroundcolor-1', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
            array(
                'default' => '#EF4136', //Default setting/value to save
                'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            )
        );

        //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
        $wp_customize->add_control(new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'rafaribeirocoach_treinamento_backgroundcolor-1', //Set a unique ID for the control
            array(
                'label' => __('Cor do Treinamento 1', 'Rafa Ribeiro Coach'), //Admin-visible name of the control
                'settings' => 'treinamento_backgroundcolor-1', //Which setting to load and manipulate (serialized is okay)
                'priority' => 10, //Determines the order this control appears in for the specified section
                'section' => 'treinamento_section_one', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            )
        ));

        //Treinamento 2
        $wp_customize->add_setting('treinamento_backgroundcolor-2', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
            array(
                'default' => '#FFD200', //Default setting/value to save
                'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            )
        );

        //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
        $wp_customize->add_control(new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'rafaribeirocoach_treinamento_backgroundcolor-2', //Set a unique ID for the control
            array(
                'label' => __('Cor do Treinamento 2', 'Rafa Ribeiro Coach'), //Admin-visible name of the control
                'settings' => 'treinamento_backgroundcolor-2', //Which setting to load and manipulate (serialized is okay)
                'priority' => 11, //Determines the order this control appears in for the specified section
                'section' => 'treinamento_section_two', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            )
        ));

        //Treinamento 3
        $wp_customize->add_setting('treinamento_backgroundcolor-3', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
            array(
                'default' => '#01CAFF', //Default setting/value to save
                'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            )
        );

        //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
        $wp_customize->add_control(new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'rafaribeirocoach_treinamento_backgroundcolor-3', //Set a unique ID for the control
            array(
                'label' => __('Cor do Treinamento 3', 'Rafa Ribeiro Coach'), //Admin-visible name of the control
                'settings' => 'treinamento_backgroundcolor-3', //Which setting to load and manipulate (serialized is okay)
                'priority' => 12, //Determines the order this control appears in for the specified section
                'section' => 'treinamento_section_three', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            )
        ));

        //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
        $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
        $wp_customize->get_setting('background_color')->transport = 'postMessage';
    }

    public static function header_output()
    {
        ?>
      <!--Customizer CSS-->
      <style type="text/css">
           <?php self::generate_css('.cursos__item-1', 'background-color', 'treinamento_backgroundcolor-1');?>
           <?php self::generate_css('.cursos__item-2', 'background-color', 'treinamento_backgroundcolor-2');?>
           <?php self::generate_css('.cursos__item-3', 'background-color', 'treinamento_backgroundcolor-3');?>
      </style>
      <!--/Customizer CSS-->
      <?php
    }

    public static function live_preview()
    {
        wp_enqueue_script(
            'mytheme-themecustomizer', // Give the script a unique ID
            get_template_directory_uri() . '/js/theme-customizer.js', // Define the path to the JS file
            array('jquery', 'customize-preview'), // Define dependencies
            '', // Define a version (optional)
            true// Specify whether to put in footer (leave this true)
        );
    }

    public static function generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true)
    {
        $return = '';
        $mod = get_theme_mod($mod_name);
        if (!empty($mod)) {
            $return = sprintf('%s { %s:%s; }',
                $selector,
                $style,
                $prefix . $mod . $postfix
            );
            if ($echo) {
                echo $return;
            }
        }
        return $return;
    }
    }
    // Setup the Theme Customizer settings and controls...
    add_action('customize_register', array('Treinamento_Customize', 'register'));

    // Output custom CSS to live site
    add_action('wp_head', array('Treinamento_Customize', 'header_output'));

    // Enqueue live preview javascript in Theme Customizer admin screen
    add_action('customize_preview_init', array('Treinamento_Customize', 'live_preview'));

    function treinamentos_setup_data()
    {
        return $treinamentos_options = array(
        //treinamento section settings
            'treinamento_section_enabled' => '',
            'treinamento_title' => __('Conheça nossos treinamentos', 'Rafa Ribeiro Coach'),
            'treinamento_one_title' => __('Momento da Virada', 'Rafa Ribeiro Coach'),
            'treinamento_two_title' => __('Aperte o Play', 'Rafa Ribeiro Coach'),
            'treinamento_three_title' => __('Mentoria', 'Rafa Ribeiro Coach'),
        );
}
