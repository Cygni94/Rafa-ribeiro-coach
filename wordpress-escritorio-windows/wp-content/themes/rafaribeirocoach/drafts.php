<section class="cursos" id="treinamentos">
        <div class="container">
            <div class="row">
                <div class="cursos__section-header col-12">
                    <div class="hr"></div>
                    <span class="cursos__section-title">conheça nossos treinamentos</span>
                </div>
            </div>
        </div>
        <div class="cursos__container container">
            <div class="row" style="justify-content: space-between">
                <div class="cursos__item col-md-3 offset-1 offset-md-0 col-10">
                    <a class="curso-link">
                        <?php the_title();?>
                    </a>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
        <?php } ?>