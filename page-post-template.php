<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$cat = get_the_category();
$catName = $cat[0]->cat_name;

get_header();
?>

<main id="page-posts">
    <section class="banner-principal inspire">

        <div class="banner-desk only-desk">
            <img src="/wp-content/uploads/2022/02/Banner-<?php echo $catName; ?>.png" alt="Imagem principal página">
        </div>


        <div class="text-banner">

            <?php
            switch ($catName) {
                case "INSPIRE":
                    echo "               
                        <p>
                            Inspire-se na art de fazer
                            acontecer e fique por dentro
                            das metodologias, dicas e
                            tendências do mercado.
                        </p>";
                    break;

                case "CASES":
                    echo "               
                        <p>
                            O Design é a
                            ART de transformar
                            uma ideia, uma estratégia,
                            um conceito,
                            em algo extraordinário
                        </p>";
                    break;
            }
            ?>
        </div>
    </section>


    <!-- vv Corpo da página vv -->
    <?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content', get_post_type());
        }
    }
    ?>

</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>