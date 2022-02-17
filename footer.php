<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="footer-arts" class="footer-arts">
    <section class="redes">
        <div class="icons">
            <div class="rede whats">
                <i class="fab fa-whatsapp"></i>
            </div>
            <div class="rede twitter">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="rede face">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="rede insta">
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <div class="text">
            <p> Acompanhe de perto as novidades, conteúdos e lançamentos em nossas redes sociais. </p>
        </div>
    </section>

    <section class="pages-contato">
        <div class="pages">
            <?php dynamic_sidebar('menu-pages-footer'); ?>
        </div>

        <div class="contato">
            <p class="contato-link"><a href="/contato"> CONTATO </a></p>
            <p class="endreço"> Rua das palmeiras, 3295 </p>
            <p class="endreço-dois"> Batatais - São Paulo </p>
            <p class="email"> E-mail: <a href="mailto:Atendimento@arts.com.br">Atendimento@arts.com.br </a> </p>
            <p class="tel">Tel: <a href="tel:+551632295667"> 16 3229.5667 </a></p>
        </div>
    </section>

    <section class="final-footer">
        <div class="logo">
            <?php dynamic_sidebar('logo-arts-roxo'); ?>
        </div>
        <div class="texts">
            <p> © Copyright 2022, Arts Media e Branding - Todos os direitos reservados. </p>
        </div>
    </section>
</footer><!-- #site-footer -->

<section class="mosaic out-footer">
    <img src="/wp-content/uploads/2022/02/Mosaic-home-inspire.png" alt="Imagem de Formas geometricas para design" width="400px" />
</section>

<div id="to-top">
    <i class="fas fa-angle-double-up"></i>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/script-arts.js?v=202202121250" />


<?php wp_footer(); ?>

</body>

</html>