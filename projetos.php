<?php /* Template Name: Projetos */ ?>
<?php get_header(); ?>

<section id="page-projetos">
    <section class="banner-principal">
        <div class="banner-desk only-desk">
            <img src="/wp-content/uploads/2022/02/banner-projetos.png" alt="Imagem principal página">
        </div>

        <div class="banner-mobile only-mobile">
            <!-- <img src="/wp-content/uploads/2022/02/Banner-home-principal-desk.png" alt="Imagem principal página"> -->
        </div>
    </section>

    <section class="box-mid-strip">
        <div class="container strip">
            <div class="item first">
                <div class="number-plus">
                    <div class="plus">
                        +
                    </div>
                    <div class="number">
                        <p> 1000 </p>
                    </div>
                </div>

                <div class="text">
                    <p> projetos de embalagens </p>
                </div>
            </div>

            <div class="item second">
                <div class="number-plus">
                    <div class="plus">
                        +
                    </div>

                    <div class="number">
                        <p> 500 </p>
                    </div>
                </div>
                <div class="text">
                    <p> clientes atendidos </p>
                </div>
            </div>

            <div class="item third">
                <div class="number-plus">
                    <div class="plus">
                        +
                    </div>

                    <div class="number">
                        <p> 20 </p>
                    </div>
                </div>
                <div class="text">
                    <p> anos de experiência </p>
                </div>
            </div>
        </div>
    </section>

    <section class="page">
        <section class="box-cases">
            <?php dynamic_sidebar( 'categoria-cases-projeto' ); ?>
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