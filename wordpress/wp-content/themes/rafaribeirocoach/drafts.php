//INICIO CUSTOMIZER
    class Depoimento_Customize {
       public static function register ( $wp_customize ) {
          //1. Define a new section (if desired) to the Theme Customizer
          $wp_customize->add_section( 'mytheme_options', 
             array(
                'title'       => __( 'MyTheme Options', 'Rafa Ribeiro Coach' ), //Visible title of section
                'priority'    => 35, //Determines what order this appears in
                'capability'  => 'edit_theme_options', //Capability needed to tweak
                'section'     => 'depoimentos',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'Rafa Ribeiro Coach'), //Descriptive tooltip
             ) 
          );

          //2. Register new settings to the WP database...
          $wp_customize->add_setting( 'depoimento_one_image', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
             array(
                'default'    => '#EF4136', //Default setting/value to save
                'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
             ) 
          );      

          //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
          $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
             $wp_customize, //Pass the $wp_customize object (required)
             'rafaribeirocoach_depoimento_background-1', //Set a unique ID for the control
             array(
                'label'      => __( 'Imagem do depoimento 1', 'Rafa Ribeiro Coach' ), //Admin-visible name of the control
                'settings'   => 'depoimento_one_image', //Which setting to load and manipulate (serialized is okay)
                'priority'   => 10, //Determines the order this control appears in for the specified section
                'section'    => 'depoimento_section_one', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
             ) 
          ) );

          //depoimento 2
          $wp_customize->add_setting( 'depoimento_background-2', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
             array(
                'default'    => '#FFD200', //Default setting/value to save
                'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
             ) 
          );      

          $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
             $wp_customize, //Pass the $wp_customize object (required)
             'rafaribeirocoach_depoimento_background-2', //Set a unique ID for the control
             array(
                'label'      => __( 'Imagem do depoimento 2', 'Rafa Ribeiro Coach' ), //Admin-visible name of the control
                'settings'   => 'depoimento_background-2', //Which setting to load and manipulate (serialized is okay)
                'priority'   => 11, //Determines the order this control appears in for the specified section
                'section'    => 'depoimento_section_two', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
             ) 
          ) );

          //depoimento 3
          $wp_customize->add_setting( 'depoimento_background-3', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
             array(
                'default'    => '#01CAFF', //Default setting/value to save
                'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
             ) 
          );      
          $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
             $wp_customize, //Pass the $wp_customize object (required)
             'rafaribeirocoach_depoimento_background-3', //Set a unique ID for the control
             array(
                'label'      => __( 'Imagem do depoimento 3', 'Rafa Ribeiro Coach' ), //Admin-visible name of the control
                'settings'   => 'depoimento_background-3', //Which setting to load and manipulate (serialized is okay)
                'priority'   => 12, //Determines the order this control appears in for the specified section
                'section'    => 'depoimento_section_three', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
             ) 
          ) );
          
          //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
          $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
          $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
          $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
          $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
       }

       public static function header_output() {
          ?>
          <!--Customizer CSS--> 
          <style type="text/css">
               <?php self::generate_css('.depoimentos__item-1', 'background-image', 'depoimento_background-1'); ?>
               <?php self::generate_css('.depoimentos__item-2', 'background-image', 'depoimento_background-2'); ?>
               <?php self::generate_css('.depoimentos__item-3', 'background-image', 'depoimento_background-3'); ?>
          </style> 
          <!--/Customizer CSS-->
          <?php
       }
