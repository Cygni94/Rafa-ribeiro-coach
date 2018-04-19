<?php /* Template Name: Aperte o play */?>
<?php get_header();?>

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/treinamentos.css">

<?php $theme_folder=get_template_directory_uri();?>
<div class="papo-page">
    <main class="papo">
        <div class="container">
            <div class="row">
                <div class="papo__callout col-md-12 col-12">
                    <h1>
                        <strong>Conquiste liberdade e autonomia. Empreenda com paixão.</strong>
                        <br> Crie um negócio estruturado e validado, alinhado com seu propósito de vida.
                        <br> E tenha o retorno financeiro desejado.</h1>
                </div>
                <div class="offset-md-4 col-md-4 col-12">
                    <img class="papo__img" src="<?php bloginfo('template_url');?>/assets/img/brand/logo-aperte-o-play.png" alt="Aperte o play">
                </div>
            </div>
            <div class="row">
                <div class="papo__video offset-md-2 col-md-8 col-12">
                    <?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
			the_content();
			?>
                </div>
            </div>
            <div class="row callout__button">
                <button type="button" class="btn btn-subscribe">
                    quero me inscrever
                </button>
            </div>
        </div>
    </main>

    <section class="beneficios">
        <div class="container">
            <div>
                <h1>
                    <strong>A sensação de plenitude através
                        <br>do seu trabalho.</strong>
                </h1>
                <br>
                <h2>Imagine por um momento criar um negócio que:</h2>
            </div>
            <div class="row">
                <div class="beneficios__item col-md-3">
                    <div class="beneficios__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/01---icone-coracao.png" alt="">
                    </div>
                    <div class="beneficios__item--label">você ame e acredite.</div>
                </div>
                <div class="beneficios__item col-md-3">
                    <div class="beneficios__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/02---icone-estrela.png" alt="">
                    </div>
                    <div class="beneficios__item--label">você utilize seus talentos.</div>
                </div>
                <div class="beneficios__item col-md-3">
                    <div class="beneficios__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/03---icone-familia.png" alt="">
                    </div>
                    <div class="beneficios__item--label">traga mais tempo para
                        <br>você e sua família.</div>
                </div>
            </div>
            <div class="row">
                <div class="beneficios__item col-md-3">
                    <div class="beneficios__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/04---icone-dinheiro.png" alt="">
                    </div>
                    <div class="beneficios__item--label">traga o retorno
                        <br>financeiro merecido.</div>
                </div>
                <div class="beneficios__item col-md-3">
                    <div class="beneficios__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/05---icone-personas.png" alt="">
                    </div>
                    <div class="beneficios__item--label">transforme a vida de
                        <br>milhares de pessoas.</div>
                </div>
                <div class="beneficios__item col-md-3">
                    <div class="beneficios__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/06---icone-borboleta.png" alt="">
                    </div>
                    <div class="beneficios__item--label">traga liberdade
                        <br>e autonomia.</div>
                </div>
            </div>
    </section>

    <section class="etapas">
        <div class="container">
            <h1>
                <strong>O Treinamento perfeito para colocar
                    <br>suas ideias empreendedoreas em ação</strong>
            </h1>
            <br>
            <h2>Conheça os 10 módulos para criar o trabalho dos seus sonhos</h2>
        </div>
        <div class="etapas__list">
            <div class="row">
                <div class="col"></div>
                <div class="etapas__item left col-md-4">
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/07---icone-play.png" alt="">
                    </div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 01</div>
                        <div class="label__title">START - ONDE ESTOU?</div>
                        <div class="label__subtitle">O jogo vai começar
                            <br>reconhecendo sua história e o
                            <br>seu momento atual</div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="etapas__item right col-md-4">
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 02</div>
                        <div class="label__title">DESCOBRINDO
                            <br>O PROPÓSITO</div>
                        <div class="label__subtitle">É a hora de reencontrar a
                            <br>sua essência e estruturar a
                            <br>da empresa</div>
                    </div>
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/08---icone-coracao.png" alt="">
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="etapas__item left col-md-4">
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/09---icone-visao.png" alt="">
                    </div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 03</div>
                        <div class="label__title">VISÃO ALÉM DO ALCANCE</div>
                        <div class="label__subtitle">É preciso construir
                            <br>internamente onde você
                            <br>quer estar no futuro.
                            <br>
                            <i>"Para quem não sabe onde vai,
                                <br>qualquer caminho serve."</i>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="etapas__item right col-md-4">
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 04</div>
                        <div class="label__title">VALORES VALIOSOS</div>
                        <div class="label__subtitle">Serão os seus guias na hora
                            <br>de tomar decisões e conectar
                            <br>as pessoas certas. Sem eles
                            <br>não somos nada.</div>
                    </div>
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/10---icone-maos.png" alt="">
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="etapas__item left col-md-4">
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/11---icone-aquarela.png" alt="">
                    </div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 05</div>
                        <div class="label__title">RECONECTANDO COM
                            <br>A SUA ARTE</div>
                        <div class="label__subtitle">Criar seus produtos e serviços
                            <br>a partir dos seus talentos
                            <br>vai te manter no jogo do
                            <br>longo prazo.
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="etapas__item right col-md-4">
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 06</div>
                        <div class="label__title">A PONTE</div>
                        <div class="label__subtitle">Definir o passo a passo com
                            <br>objetivos, metas e tarefas vão
                            <br>te levar ao outro lado.</div>
                    </div>
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/12---icone-anotacao.png" alt="">
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="etapas__item left col-md-4">
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/13---icone-retorno.png" alt="">
                    </div>
                    <div class="etapas__item--label">
                        <div class="label__count">FASE 07</div>
                        <div class="label__title">AJUSTANDO AS VELAS</div>
                        <div class="label__subtitle">Momento de rever toda a
                            <br>caminhada para avaliar os
                            <br>pontos fortes e os ajustes
                            <br>a fazer.
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="etapas__item right col-md-4">
                    <div class="etapas__item--label">
                        <div class="label__count">FASE FINAL</div>
                        <div class="label__title">CELEBRAÇÃO</div>
                        <div class="label__subtitle">Agora seu negócio está
                            <br>estruturado, testado e você
                            <br>vai seguir fazendo o que ama
                            <br>e tendo a remuneração
                            <br>que merece.</div>
                    </div>
                    <div class="etapas__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/14---icone-celebracao.png" alt="">
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>

    <section class="bonus container-fluid">
        <div>
            <h1>
                <strong>Bônus para apoiar no aprendizado</strong>
            </h1>
            <br>
            <h2>Conteúdos e Cursos Extras para Impulsionar sua Jornada</h2>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/15---icone-computador.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>SITE PROFISSIONAL</strong>
                </div>
                <div class="bonus__item--subtitle">como construir seu site em apenas 01 hora</div>
            </div>
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/16---icone-dinheiro.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>CONTROLE FINANCEIRO</strong>
                </div>
                <div class="bonus__item--subtitle">receba planilhas prontas para
                    <br>controlar suas finanças de forma prática</div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/17---icone-pincel.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>IDENTIDADE VISUAL</strong>
                </div>
                <div class="bonus__item--subtitle">crie suas artes de forma gratuita e fácil</div>
            </div>
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/18---icone-videos.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>VÍDEOS DE QUALIDADE</strong>
                </div>
                <div class="bonus__item--subtitle">apenda a editar vídeos para suas redes sociais</div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/19---icone-anotacao.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>TAREFAS EM DIA</strong>
                </div>
                <div class="bonus__item--subtitle">aprenda como gerenciar suas tarefas e
                    <br>aumentar a sua produtividade</div>
            </div>
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/20---icone-calculadora.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>DESMISTIFICANDO A CONTABILIDADE</strong>
                </div>
                <div class="bonus__item--subtitle">o que você precisa saber nessa fase inicial</div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/21---icone-livro.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>BIBLIOGRAFIA DO CURSO</strong>
                </div>
                <div class="bonus__item--subtitle">leituras sugeridas para você se
                    <br>aprofundar em cada tema</div>
            </div>
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/22---icone-mapa.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>MAPA DA MINA</strong>
                </div>
                <div class="bonus__item--subtitle">material didático para registrar
                    <br>o seu progresso</div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/23---icone-som.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>ÁUDIOS EM MP3</strong>
                </div>
                <div class="bonus__item--subtitle">todos os bônus em mp3 para ouvir
                    <br>onde você quiser</div>
            </div>
            <div class="col"></div>
            <div class="bonus__item col-md-4">
                <div class="bonus__item--icon">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/24---icone-trofeu.png" alt="">
                </div>
                <div class="bonus__item--title">
                    <strong>COMUNIDADE VIP DE ALUNOS</strong>
                </div>
                <div class="bonus__item--subtitle">rede de relacionamento com os alunos
                    <br>do treinamento</div>
            </div>
            <div class="col"></div>
        </div>
    </section>

    <section class="investimento">
        <div class="container-fluid">
            <div class="row">
                <div class="investimento__datas col">
                    <div class="investimento__datas--wrapper">
                        <div class="investimento__datas--icon">
                            <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/25---icone-calendario.png" alt="">
                        </div>
                        <ul>DATAS DOS
                            <br>TREINAMENTOS:
                            <li>23/08/2018</li>
                            <li>23/08/2018</li>
                            <li>23/08/2018</li>
                            <li>23/08/2018</li>
                            <li>23/08/2018</li>
                            <li>23/08/2018</li>
                            <li>23/08/2018</li>
                            <li>23/08/2018</li>
                        </ul>
                        <br>
                        <ul>HORÁRIO:
                            <li>19:00 ÀS 22:00</li>
                        </ul>
                    </div>
                </div>
                <div class="investimento__valor col-3">
                    <div class="investimento__valor--header">INVESTIMENTO</div>
                    <div class="arrow-down"></div>
                    <div class="investimento__valor--desconto">
                        <div class="linha-desconto">
                            R$ 1.300,00
                        </div>
                    </div>
                    <div class="investimento__valor--prazo">
                        VALOR PARA INSCRIÇÃO
                        <BR>ATÉ DIA 25/07/2017
                    </div>
                    <div class="investimento__valor--preco">
                        <strong>
                            <span class="preco__vezes">02 X </span>
                            <span class="preco__parc">200,00</span>
                        </strong>
                    </div>
                    <div class="investimento__valor--subscribe">
                        <button type="button" class="btn btn-subscribe">
                            quero me inscrever
                        </button>
                    </div>
                </div>
                <div class="investimento__items col">
                    <ul>
                        <li class="first">Treinamento Completo
                            <br>Aperte o Play</li>
                        <li>Consultoria Individual</li>
                        <li>Mini curso - Tarefas em Dia</li>
                        <li>Mini curso - Vídeo Profissional</li>
                        <li>Mini Curso - Identidade Visual</li>
                        <li>Vídeo Desmistificando a Contabilidade</li>
                        <li>Mini Curso - Vídeos de Qualidade</li>
                        <li>Desafios Individuais</li>
                        <li>Acesso a Comunidade Vip
                            <br>exclusiva para alunos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="garantia">
        <div class="container">
            <div class="row">
                <div class="garantia__icon col-3">
                    <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/26---selo-garantia.png" alt="">
                </div>
                <div class="garantia__text col-7">
                    <div class="garantia__text--title">RISCO ZERO</div>
                    <div class="garantia__text--text">
                        Tenho tanta certeza que você vai amar os resultados que terá com o treinamento que vou te dar uma garantia incondicional.
                        <br>Se após o nosso primeiro encontro você não gostar do treinamento e queira mudar de ideia por qualquer
                        motivo, eu te devolverei 100% do valor investido, sem burocracia.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="metodologia">
        <div class="container">
            <div>
                <h1>
                    <strong>Como será entregue o Treinamento Aperte o Play</strong>
                </h1>
            </div>
            <div class="row">
                <div class="metodologia__item col-md-3">
                    <div class="metodologia__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/27---icone-personas.png" alt="">
                    </div>
                    <div class="metodologia__item--label">08 encontros Ao Vivo
                        <br>Online com 03 horas
                        <br>de duração</div>
                </div>
                <div class="metodologia__item col-md-3">
                    <div class="metodologia__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/28---icone-videos.png" alt="">
                    </div>
                    <div class="metodologia__item--label">os encontros serão
                        <br>gravados para
                        <br>você revisar</div>
                </div>
                <div class="metodologia__item col-md-3">
                    <div class="metodologia__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/29---icone-conversa.png" alt="">
                    </div>
                    <div class="metodologia__item--label">03 consultorias
                        <br>individuais (online)
                        <br>comigo</div>
                </div>
            </div>
            <div class="row">
                <div class="metodologia__item col-md-3">
                    <div class="metodologia__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/30---icone-livro.png" alt="">
                    </div>
                    <div class="metodologia__item--label">material de apoio</div>
                </div>
                <div class="metodologia__item col-md-3">
                    <div class="metodologia__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/31---icone-anotacao.png" alt="">
                    </div>
                    <div class="metodologia__item--label">exercícios práticos</div>
                </div>
                <div class="metodologia__item col-md-3">
                    <div class="metodologia__item--icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/aperte-o-play/32---icone-medalha.png" alt="">
                    </div>
                    <div class="metodologia__item--label">desafios individuais<br>(gamificação)</div>
                </div>
            </div>
            <div class="row callout__button">
                <button type="button" class="btn btn-subscribe">
                    quero me inscrever
                </button>
            </div>

        </div>
    </section>

    <?php get_footer();?>