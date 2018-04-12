//INICIO Aperte o play - Benefícios
function rafaribeiro_beneficios_customizer( $wp_customize ) {
 
    //beneficio section panel
    $wp_customize->add_panel( 'rafaribeiro_beneficio_options', array(
            'priority'       => 200,
            'capability'     => 'edit_theme_options',
            'title'      => __('Seção beneficios', 'Rafa Ribeiro Coach'),
        ) );
        
        $wp_customize->add_section( 'beneficio_section_head' , array(
            'title'      => __('Título da seção','Rafa Ribeiro Coach'),
            'panel'  => 'rafaribeiro_beneficio_options',
            'priority'   => 50,
           ) );
        
        //Hide Index beneficio Section	
        $wp_customize->add_setting(
        'beneficio_options[beneficio_section_enabled]',
        array(
            'default' => '',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option'
        )	
        );
        $wp_customize->add_control(
        'beneficio_options[beneficio_section_enabled]',
        array(
            'label' => __('Ocultar esta seção','Rafa Ribeiro Coach'),
            'section' => 'beneficio_section_head',
            'type' => 'checkbox',
        )
        );

        $wp_customize->add_setting(
        'beneficio_options[beneficio_label]',
        array(
            'default' => __('beneficios','Rafa Ribeiro Coach'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option'
        )	
        );
        $wp_customize->add_control(
        'beneficio_options[beneficio_label]',
        array(
            'label' => __('Title','Rafa Ribeiro Coach'),
            'section' => 'beneficio_section_head',
            'type' => 'text',
        )
        );

    //beneficio section one
        $wp_customize->add_section( 'beneficio_item_one' , array(
            'title'      => __('beneficio 1', 'Rafa Ribeiro Coach'),
            'panel'  => 'rafaribeiro_beneficio_options',
            'priority'   => 100,
            'sanitize_callback' => 'sanitize_text_field',
           ) );

        $wp_customize->add_setting(
        'beneficio_options[beneficio_one_label]',
        array(
            'default' => __('você ame e acredite.','Rafa Ribeiro Coach'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option'
        )	
        );
        $wp_customize->add_control(
        'beneficio_options[beneficio_one_label]',
        array(
            'label' => __('Legenda','Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_one',
            'type' => 'text',
        )
        );
        $wp_customize->add_setting( 'beneficio_options[beneficio_one_image]',
            array(
                'default' => get_template_directory_uri().'/assets/img/beneficios/beneficio_xande_bastos.png',
	            'type' => 'option','sanitize_callback' => 'esc_url_raw',
            )
        );
 
	    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'beneficio_options[beneficio_one_image]',
			array(
				'type'        => 'upload',
				'label' => __('Imagem do beneficio 1','Rafa Ribeiro Coach'),
				'section' => 'beneficio_item_one',
				'settings' =>'beneficio_options[beneficio_one_image]',
			)
		)
	);
        
    //Second beneficio
    
    $wp_customize->add_section( 'beneficio_item_two' , array(
            'title'      => __('beneficio 2', 'Rafa Ribeiro Coach'),
            'panel'  => 'rafaribeiro_beneficio_options',
            'priority'   => 200,
           ) );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_two_label]',
        array(
            'default' => __('ÁGATHA TOMMASI','Rafa Ribeiro Coach'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )	
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_two_label]',
        array(
            'label' => __('Legenda' ,'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_two',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting( 'beneficio_options[beneficio_two_image]',
    array(
        'default' => get_template_directory_uri().'/assets/img/beneficios/beneficio_agatha.png',
        'type' => 'option','sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
new WP_Customize_Image_Control(
    $wp_customize,
    'beneficio_options[beneficio_two_image]',
    array(
        'type'        => 'upload',
        'label' => __('Imagem do beneficio 2','Rafa Ribeiro Coach'),
        'section' => 'beneficio_item_two',
        'settings' =>'beneficio_options[beneficio_two_image]',
    )
)
);

    //Third beneficio section
    $wp_customize->add_section( 'beneficio_item_three' , array(
            'title'      => __('beneficio 3', 'Rafa Ribeiro Coach'),
            'panel'  => 'rafaribeiro_beneficio_options',
            'priority'   => 300,
           ) );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_three_label]',
        array(
            'default' => __('RAFAEL, DABÁ','Rafa Ribeiro Coach'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' =>'option',
        )	
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_three_label]',
        array(
            'label' => __('Autor do beneficio','Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_three',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting( 'beneficio_options[beneficio_three_image]',
    array(
        'default' => get_template_directory_uri().'/assets/img/beneficios/beneficio_rafael.png',
        'type' => 'option','sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
new WP_Customize_Image_Control(
    $wp_customize,
    'beneficio_options[beneficio_three_image]',
    array(
        'type'        => 'upload',
        'label' => __('Imagem do beneficio 3','Rafa Ribeiro Coach'),
        'section' => 'beneficio_item_three',
        'settings' =>'beneficio_options[beneficio_three_image]',
    )
)
);


    function rafaribeiro_beneficios_sanitize_html( $input ) {
        return force_balance_tags( $input );
        }
    }
    add_action( 'customize_register', 'rafaribeiro_beneficios_customizer' );

    function beneficios_setup_data()
          {
        return $beneficios_options=array(
        //beneficio section settings
        'beneficio_section_enabled' => '',
        'beneficio_label' => __('beneficios','Rafa Ribeiro Coach'),
        'beneficio_one_label'=>__('','Rafa Ribeiro Coach'),
        'beneficio_one_image'=>__('','Rafa Ribeiro Coach'),
        'beneficio_two_label'=>__('','Rafa Ribeiro Coach'),
        'beneficio_two_image'=>__('','Rafa Ribeiro Coach'),
        'beneficio_three_label'=>__('','Rafa Ribeiro Coach'),
        'beneficio_three_image'=>__('','Rafa Ribeiro Coach'),
    );
    }