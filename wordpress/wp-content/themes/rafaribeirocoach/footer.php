<?php wp_footer();?>
<?php $theme_folder = get_template_directory_uri();?>

<footer class="footer container">
        <div class="row">
            <div class="mailing-list__callout offset-md-3 col-md-6 col-sm-12">
                <span>Entre para nossa lista e receba conteúdos
                    <br> exclusivos e com prioridade</span>
            </div>
        </div>
        <div class="footer__mailing-list row">
            <div class="mailing-list__input offset-md-3 col-md-6 col-sm-12">
                <div id="mc_embed_signup">
                    <form action="https://rafaribeiro.us17.list-manage.com/subscribe/post?u=df9ab4b863ab4a55fa168caf6&amp;id=f0b21dcfa4" method="post"
                        id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <span class="mc-field-group">
                                <input type="email" placeholder="Qual o seu e-mail?" name="EMAIL" class="mailing-list__input-email required email" id="mce-EMAIL">
                            </span>
                            <span class="clear">
                                <input type="submit" value="Cadastrar" name="subscribe" id="mc-embedded-subscribe" class="mailing-list__button button">
                            </span>
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_4b32c2539aa1fa0b016c51887_c2b82fbe39" tabindex="-1" value="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer__menu offset-md-2 col-md-5 col-6">
                <span>
                    <a href="index.html#sobre">sobre</a>
                </span>
                <span>
                    <a href="index.html#papo-momento-da-virada">papo momento da virada</a>
                </span>
                <span>
                    <a href="index.html#depoimentos">depoimentos</a>
                </span>
                <span>contato</span>
            </div>
            <div class="footer__social col-md-3 col-6">
                <span>conecte-se comigo</span>
                <div class="social-icons">
                    <span>
                        <a href="https://www.facebook.com/rafaribeirocoach/">
                            <img class="social-icon" src="<?= $theme_folder;?>/assets/img/icon/facebook.png" alt="Facebook">
                        </a>
                    </span>
                    <span>
                        <a href="https://www.instagram.com/rafaribeiro.coach/">
                            <img class="social-icon" src="<?= $theme_folder;?>/assets/img/icon/instagram.png" alt="Instagram">
                        </a>
                    </span>
                    <span>
                        <a href="https://www.youtube.com/channel/UCyEyl4K-FM1zY_mRaOv5Ylg">
                            <img class="social-icon" src="<?= $theme_folder;?>/assets/img/icon/youtube.png" alt="Youtube">
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="footer__bottom row">
            <div class="footer__logo col-12">
                <img src="<?= $theme_folder;?>/assets/img/brand/logo_rodape.png" alt="">
            </div>
            <br>
            <div class="footer__copyright col-12">
                <small>© 2017 - Rafa Ribeiro. Todos os direitos reservados. Design orgulhosamente desenvolvido por Jotha Marketing
                    Design.</small>
            </div>
            <br>
        </div>
        </div>
    </footer>

</body>
</html>