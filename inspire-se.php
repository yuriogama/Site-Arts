<?php /* Template Name: inspire-se */ ?>
<?php get_header(); ?>

<section id="page-inspire">
    <section class="banner-principal">
        <div class="banner-desk only-desk">
            <img src="/wp-content/uploads/2022/02/Banner-Inspire.png" alt="Imagem principal página">
        </div>

        <div class="text-banner">
            <p>
                Inspire-se na art de fazer
                acontecer e fique por dentro
                das metodologias, dicas e
                tendências do mercado.
            </p>
        </div>
    </section>

    <section class="page">
        <section class="inspire">
            <?php dynamic_sidebar('inspire-se-post'); ?>
        </section>

        <section class="box-newsletter roxo">
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
    </section>
</section>

<?php get_footer(); ?>