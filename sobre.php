<?php /* Template Name: Sobre */ ?>
<?php get_header(); ?>

<section id="page-sobre">
    <section class="banner-principal">
        <div class="banner-desk only-desk">
            <img src="/wp-content/uploads/2022/02/Vector-Smart-Object.png" alt="Imagem principal página">
        </div>

        <div class="banner-mobile only-mobile">
            <!-- <img src="/wp-content/uploads/2022/02/Banner-home-principal-desk.png" alt="Imagem principal página"> -->
        </div>
    </section>

    <section class="page">
        <div class="container sobre">
            <div class="first text-link">
                <div class="text">
                    Ser um agente transformador nos negócios dos nossos clientes faz parte do nosso DNA e quando essa tranformação vem através de resultados, nos motiva ainda mais a buscar novidades e fazer sempre o melhor para a saúde da marca que estamos promovendo.
                </div>

                <div class="link">
                    <p class="texts">
                        QUER UM TOQUE
                        DE ESTRATÉGIA,
                        RESULTADO
                        E ARTS
                        NOS SEUS PROJETOS?
                    </p>
                    <button>
                        <a href="#"> CLIQUE AQUI </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="container somos-arts">
            <div class="text-somos">
                <p class="title"> Nós fazemos a </p>
            </div>

            <div class="box-images">
                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/2289_SkVNQSBGQU1PIDEwMjgtMTE3.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> Rafael Ribeiro </p>
                    </div>
                </div>

                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/2289_SkVNQSBGQU1PIDEwMjgtMTE3.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> Felipe Oliveira </p>
                    </div>
                </div>

                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/2289_SkVNQSBGQU1PIDEwMjgtMTE3.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> David Libal </p>
                    </div>
                </div>

                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/2289_SkVNQSBGQU1PIDEwMjgtMTE3.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> Danilo Assis </p>
                    </div>
                </div>

                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/1177_U1RVRElPIEtBVCAxNDAtNzY.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> Anne Uhr </p>
                    </div>
                </div>

                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/1177_U1RVRElPIEtBVCAxNDAtNzY.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> Bruna Faria </p>
                    </div>
                </div>

                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/1177_U1RVRElPIEtBVCAxNDAtNzY.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> Raquel Campos </p>
                    </div>
                </div>

                <div class="item">
                    <div class="picture">
                        <img src="/wp-content/uploads/2022/02/1177_U1RVRElPIEtBVCAxNDAtNzY.png" alt="imagem teste">
                    </div>
                    <div class="name">
                        <p> Isadora Costa </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container nossos">
            <div class="item missao">
                <p class="title"> NOSSA MISSÃO </p>
                <p class="descr">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                </p>
            </div>

            <div class="item missao">
                <p class="title"> NOSSOS VALORES </p>
                <p class="descr">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                </p>
            </div>

            <div class="item missao">
                <p class="title"> NOSSA VISÃO </p>
                <p class="descr">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                </p>
            </div>
        </div>

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
    </section>
</section>

<?php get_footer(); ?>