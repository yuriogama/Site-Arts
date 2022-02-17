<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="home-page">
    <section class="banner-home-principal">
        <div class="banner-desk only-desk">
            <?php dynamic_sidebar('banner-home-princpal-desk'); ?>
        </div>

        <div class="banner-mobile only-mobile">
            <?php dynamic_sidebar('banner-home-princpal-mobile'); ?>
        </div>
    </section>

    <section class="box-mid-information">
        <div class="box-left">
            <div class="texts">
                <span class="first">
                    É um Projeto <br />
                    de Design de embalagem <br />
                    que sua empresa precisa?
                </span>

                <span class="second">
                    Ou é uma <br />
                    estratégia <br />
                    online de vendas?
                </span>

                <span class="third">
                    Ou é algo ainda <br />
                    mais personalizado?
                </span>
            </div>
        </div>

        <div class="box-rigth">
            <div class="texts-button">
                <p class="title"> Fale com a Gente </p>
                <p class="descr"> QUE VAMOS DAR UM TOQUE DE ESTRATÉGIA, RESULTADO E ARTS NOS SEUS PROJETOS</p>

                <button class="button">
                    <a href="#"> clique aqui </a>
                </button>
            </div>
        </div>
    </section>

    <section class="box-cases">
        <div class="link-left">
            <?php dynamic_sidebar('imagem-link-home-left'); ?>
        </div>
        <div class="categoria">
            <?php dynamic_sidebar('categoria-cases-home'); ?>
        </div>
        <div class="link-rigth">
            <?php dynamic_sidebar('imagem-link-home-rigth'); ?>
        </div>
    </section>

    <section class="box-inspire">
        <div class="first-box">
            <img src="/wp-content/uploads/2022/02/Mosaic-home-inspire.png" alt="Imagem de Formas geometricas para design" width="400px" />
        </div>

        <div class="second-box">
            <div class="box">
                <p class="title">
                    DESENVOLVEMOS NEGÓCIOS ATRAVÉS DA ART, CRIATIVIDADE E ESTRATÉGIA
                </p>

                <p class="descr">
                    Sabemos que rapidez e agilidade são características apreciadas no mundo atual,
                    mas continuamos acreditando no valor da direção.
                </p>
            </div>
        </div>
    </section>

    <section class="box-inspire-categoria">
        <?php dynamic_sidebar('categoria-inspire-home'); ?>
    </section>

    <section class="box-newsletter">
        <div class="container">
            <div class="texts">
                <p class="title">
                    Receba mensalmente nossos insights
                    sobre branding e embalagens
                </p>

                <p class="descr">
                    Assine nossa newsletter e fique de olho nas novidades,
                    do mundo do Design e estratégia digital.
                </p>
            </div>

            <div class="form">
                <?php dynamic_sidebar('plugin-newsletter'); ?>
            </div>
        </div>
    </section>
</main>
<!-- #site-content -->

<?php
get_footer();
