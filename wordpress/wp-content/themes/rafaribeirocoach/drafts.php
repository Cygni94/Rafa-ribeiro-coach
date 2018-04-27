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

    'icone_datas_aperteOPlay' => __('get_template_directory_uri() . '/assets/img/icon/aperte-o-play/25---icone-calendario.png'', 'Rafa Ribeiro Coach'),
    'datas_label' => __('Datas dos treinamentos', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_one' => __('', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_two' => __('', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_three' => __('', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_four' => __('', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_five' => __('', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_six' => __('', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_seven' => __('', 'Rafa Ribeiro Coach'),
    'datas_dos_treinamentos_aperteOPlay_eight' => __('', 'Rafa Ribeiro Coach'),
    'horarios_label' => __('Horário:', 'Rafa Ribeiro Coach'),
    'horarios_dos_treinamentos_aperteOPlay_one' => __('', 'Rafa Ribeiro Coach'),
    'horarios_dos_treinamentos_aperteOPlay_two' => __('', 'Rafa Ribeiro Coach'),
    'valor_label' => __('R$ 1.300,00', 'Rafa Ribeiro Coach'),
    'prazo_label' => __('', 'Rafa Ribeiro Coach'),
    'numParc_label' => __('02', 'Rafa Ribeiro Coach'),
    'valParc_label' => __('200,00', 'Rafa Ribeiro Coach'),
    'linkPagto_label' => __('', 'Rafa Ribeiro Coach'),
    'itens_one_label' => __('Treinamento Completo Aperte o Play', 'Rafa Ribeiro Coach'),
    'itens_two_label' => __('Consultoria Individual', 'Rafa Ribeiro Coach'),
    'itens_three_label' => __('Mini curso  - Tarefas em Dia', 'Rafa Ribeiro Coach'),
    'itens_four_label' => __('Mini Curso - Vídeo Profissional', 'Rafa Ribeiro Coach'),
    'itens_five_label' => __('Mini curso  - Identidade Visual', 'Rafa Ribeiro Coach'),
    'itens_six_label' => __('Vídeo Desmistificando a Contabilidade', 'Rafa Ribeiro Coach'),
    'itens_seven_label' => __('Mini curso  - Vídeos de qualidade', 'Rafa Ribeiro Coach'),
    'itens_eight_label' => __('Desafios Individuais', 'Rafa Ribeiro Coach'),
    'itens_nine_label' => __('Acesso a Comunidade Vip exclusiva para alunos', 'Rafa Ribeiro Coach'),

