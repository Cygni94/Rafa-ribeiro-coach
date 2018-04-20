<?php
//MENU RESPONSIVO BOOTSTRAP 4
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rafaribeirocoach'),
        'secondary' => __('Footer Menu', 'rafaribeirocoach'),

    ));

    function special_nav_class($classes, $item)
    {

        if (in_array('current-menu-item', $classes)) {

            $classes[] = 'active ';

        }

        return $classes;

    }

//aumentar o limite de upload de cada arquivo:
@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');

add_theme_support('post-thumbnails');

function avf_remove_media_element()
    {

        wp_deregister_script('wp-mediaelement');

        wp_deregister_style('wp-mediaelement');

}
function post_type_videos()
{

    $nomeSingular = 'Vídeo';

    $nomePlural = 'Vídeos';

    $description = 'Vídeos do Papo Momento da Virada';

    $labels = array(

        'name' => $nomePlural,

        'name_singular' => $nomeSingular,

        'add_new_item' => 'Adicionar novo ' . $nomeSingular,

        'edit_item' => 'Editar ' . $nomeSingular,

    );

    $supports = array(

        'title',

        'editor',

        'thumbnail',

    );

    $args = array(

        'labels' => $labels,

        'description' => $description,

        'public' => true,

        'menu_icon' => 'dashicons-video-alt3',

        'supports' => $supports,

        'taxonomies' => array('category'),

    );

    register_post_type('video', $args);

    }

    add_action('init', 'post_type_videos');

function post_type_audios()
{

    $nomeSingular = 'Áudio';

    $nomePlural = 'Áudios';

    $description = 'Áudios do Papo Momento da Virada';

    $labels = array(

        'name' => $nomePlural,

        'name_singular' => $nomeSingular,

        'add_new_item' => 'Adicionar novo ' . $nomeSingular,

        'edit_item' => 'Editar ' . $nomeSingular,

    );

    $supports = array(

        'title',

        'editor',

        'thumbnail',

    );

    $args = array(

        'labels' => $labels,

        'description' => $description,

        'public' => true,

        'menu_icon' => 'dashicons-format-audio',

        'supports' => $supports,

        'taxonomies' => array('category'),

    );

    register_post_type('audio', $args);

    }

    add_action('init', 'post_type_audios');

function theme_js()
{

    global $wp_scripts;

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');

    }

    add_action('wp_enqueue_scripts', 'theme_js');

// add tag support to pages
function tags_support_all()
{
    register_taxonomy_for_object_type('post_tag', 'page');
    }

    // ensure all tags are included in queries
    function tags_support_query($wp_query)
    {
    if ($wp_query->get('tag')) {
        $wp_query->set('post_type', 'any');
    }

    }

    // tag hooks
    add_action('init', 'tags_support_all');
    add_action('pre_get_posts', 'tags_support_query');

//INICIO SEÇÃO TREINAMENTOS
function rafaribeiro_treinamentos_customizer($wp_customize)
{

    //treinamento section panel
    $wp_customize->add_panel('rafaribeiro_treinamento_options', array(
        'priority' => 110,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Treinamentos', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('treinamento_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 50,
    ));

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

//INICIO SEÇÃO DEPOIMENTOS
function rafaribeiro_depoimentos_customizer($wp_customize)
{

    //depoimento section panel
    $wp_customize->add_panel('rafaribeiro_depoimento_options', array(
        'priority' => 111,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Depoimentos', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('depoimento_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 50,
    ));

    //Hide Index depoimento Section
    $wp_customize->add_setting(
        'depoimento_options[depoimento_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'depoimento_options[depoimento_title]',
        array(
            'default' => __('depoimentos', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_title]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_head',
            'type' => 'text',
        )
    );

    //depoimento section one
    $wp_customize->add_section('depoimento_section_one', array(
        'title' => __('Depoimento 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting(
        'depoimento_options[depoimento_one_title]',
        array(
            'default' => __('XANDE BASTOS', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_one_title]',
        array(
            'label' => __('Nome do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_one',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'depoimento_options[depoimento_one_text]',
        array(
            'default' => __('O resultado foi incrível, pois consegui entender as minhas maiores dificuldades e potencializar as minhas qualidades. Hoje sou uma pessoa melhor e com foco na solução.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_one_text]',
        array(
            'label' => __('Texto do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_one',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting('depoimento_options[depoimento_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/depoimentos/depoimento_xande_bastos.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'depoimento_options[depoimento_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do depoimento 1', 'Rafa Ribeiro Coach'),
                'section' => 'depoimento_section_one',
                'settings' => 'depoimento_options[depoimento_one_image]',
            )
        )
    );

    //Second depoimento

    $wp_customize->add_section('depoimento_section_two', array(
        'title' => __('Depoimento 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting(
        'depoimento_options[depoimento_two_title]',
        array(
            'default' => __('ÁGATHA TOMMASI', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_two_title]',
        array(
            'label' => __('Nome do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_two',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'depoimento_options[depoimento_two_text]',
        array(
            'default' => __('Foi um processo de autodescoberta. Aprendi quais eram os meus limites e a julgar se devia respeitá-los ou ultrapassá-los. Aprendi a equilibrar minha energia e hierarquizar minhas prioridades.'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_two_text]',
        array(
            'label' => __('Texto do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_two',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting('depoimento_options[depoimento_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/depoimentos/depoimento_agatha.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'depoimento_options[depoimento_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do depoimento 2', 'Rafa Ribeiro Coach'),
                'section' => 'depoimento_section_two',
                'settings' => 'depoimento_options[depoimento_two_image]',
            )
        )
    );

    //Third depoimento section
    $wp_customize->add_section('depoimento_section_three', array(
        'title' => __('Depoimento 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting(
        'depoimento_options[depoimento_three_title]',
        array(
            'default' => __('RAFAEL, DABÁ', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_three_title]',
        array(
            'label' => __('Autor do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_three',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'depoimento_options[depoimento_three_text]',
        array(
            'default' => __('Vou levar para a vida inteira o que aprendi com o coaching. Se eu pudesse teria esse acompanhamento a vida toda!!!', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_three_text]',
        array(
            'label' => __('Texto do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_three',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting('depoimento_options[depoimento_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/depoimentos/depoimento_rafael.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'depoimento_options[depoimento_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do depoimento 3', 'Rafa Ribeiro Coach'),
                'section' => 'depoimento_section_three',
                'settings' => 'depoimento_options[depoimento_three_image]',
            )
        )
    );

    function rafaribeiro_depoimentos_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
    }
    add_action('customize_register', 'rafaribeiro_depoimentos_customizer');

    function depoimentos_setup_data()
    {
    return $depoimentos_options = array(
        //depoimento section settings
        'depoimento_section_enabled' => '',
        'depoimento_title' => __('depoimentos', 'Rafa Ribeiro Coach'),
        'depoimento_one_title' => __('XANDE BASTOS', 'Rafa Ribeiro Coach'),
        'depoimento_one_text' => __('O resultado foi incrível, pois consegui entender as minhas maiores dificuldades e potencializar as minhas qualidades. Hoje sou uma pessoa melhor e com foco na solução.', 'Rafa Ribeiro Coach'),
        'depoimento_one_image' => __('', 'Rafa Ribeiro Coach'),
        'depoimento_two_title' => __('AGATHA TOMMASI', 'Rafa Ribeiro Coach'),
        'depoimento_two_text' => __('Foi um processo de autodescoberta. Aprendi quais eram os meus limites e a julgar se devia respeitá-los ou ultrapassá-los. Aprendi a equilibrar minha energia e hierarquizar minhas prioridades.', 'Rafa Ribeiro Coach'),
        'depoimento_two_image' => __('', 'Rafa Ribeiro Coach'),
        'depoimento_three_title' => __('RAFAEL, DABÁ', 'Rafa Ribeiro Coach'),
        'depoimento_three_text' => __('Vou levar para a vida inteira o que aprendi com o coaching. Se eu pudesse teria esse acompanhamento a vida toda!!!', 'Rafa Ribeiro Coach'),
        'depoimento_three_image' => __('', 'Rafa Ribeiro Coach'),
    );
}

//INICIO Aperte o play - Informações Aperte o Play
function rafaribeiro_datasAperteOPlay_customizer($wp_customize)
{
    //datas section panel
    $wp_customize->add_panel('rafaribeiro_infoAperteoPlay_options', array(
        'priority' => 112,
        'capability' => 'edit_theme_options',
        'title' => __('Aperte o Play - Informações', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('datas_dos_treinamentos_aperteOPlay', array(
        'title' => __('Datas dos treinamentos', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_infoAperteoPlay_options',
        'priority' => 50,
    ));
        $wp_customize->add_setting('datas_options[icone_datas_aperteOPlay]',
            array(
                'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/25---icone-calendario.png',
                'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'datas_options[icone_datas_aperteOPlay]',
                array(
                    'type' => 'upload',
                    'label' => __('Ícone', 'Rafa Ribeiro Coach'),
                    'section' => 'datas_dos_treinamentos_aperteOPlay',
                    'settings' => 'datas_options[icone_datas_aperteOPlay]',
                )
            )
        );
        $wp_customize->add_setting(
            'datas_options[datas_label]',
            array(
                'default' => __('Datas dos treinamentos', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'datas_options[datas_label]',
            array(
                'label' => __('Cabeçalho', 'Rafa Ribeiro Coach'),
                'section' => 'datas_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'datas_options[datas_dos_treinamentos_aperteOPlay_one]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'datas_options[datas_dos_treinamentos_aperteOPlay_one]',
            array(
                'label' => __('Datas', 'Rafa Ribeiro Coach'),
                'section' => 'datas_dos_treinamentos_aperteOPlay',
                'type' => 'date',
            )
        );
        $wp_customize->add_setting(
            'datas_options[datas_dos_treinamentos_aperteOPlay_two]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'datas_options[datas_dos_treinamentos_aperteOPlay_two]',
            array(
                'label' => __('', 'Rafa Ribeiro Coach'),
                'section' => 'datas_dos_treinamentos_aperteOPlay',
                'type' => 'date',
            )
        );
        $wp_customize->add_setting(
            'horarios_options[horarios_label]',
            array(
                'default' => __('Horário:', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'horarios_options[horarios_label]',
            array(
                'label' => __('Cabeçalho', 'Rafa Ribeiro Coach'),
                'section' => 'datas_dos_treinamentos_aperteOPlay',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
            array(
                'label' => __('Início', 'Rafa Ribeiro Coach'),
                'section' => 'datas_dos_treinamentos_aperteOPlay',
                'type' => 'time',
            )
        );
        $wp_customize->add_setting(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
            array(
                'default' => __('', 'Rafa Ribeiro Coach'),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
                'type' => 'option',
            )
        );
        $wp_customize->add_control(
            'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
            array(
                'label' => __('Término', 'Rafa Ribeiro Coach'),
                'section' => 'datas_dos_treinamentos_aperteOPlay',
                'type' => 'time',
            )
        );
            //Itens do treinamento

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

    //PÁGINA TREINAMENTOS
function pagina_treinamentos_customizer($wp_customize)
{

    $wp_customize->add_panel('pagina_treinamentos', array(
        'priority' => 113,
        'capability' => 'edit_theme_options',
        'title' => __('Página Treinamentos', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('data_do_treinamento', array(
        'title' => __('Data do treinamento', 'Rafa Ribeiro Coach'),
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