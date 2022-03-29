<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

<section id="page-contato">
    <section class="banner-principal">
        <div class="banner-desk only-desk">
            <img src="/wp-content/uploads/2022/03/Banner-principal-contato.png" alt="Imagem principal página">
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
        <section class="box-newsletter">
            <div class="container">
                <div class="texts">
                    <p class="title">
                        Queremos ouvir você, fale mais do seu projeto e deixe a solução com a gente
                    </p>
                </div>

                <div class="form">
                    <?php dynamic_sidebar('plugin-contato-form'); ?>
                </div>
            </div>
        </section>
    </section>
</section>

<?php get_footer(); ?>