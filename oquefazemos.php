<?php /* Template Name: O que Fazemos */ ?>
<?php get_header(); ?>

<section id="page-fazemos">
    <section class="banner-principal">
        <div class="banner-desk only-desk">
            <img src="/wp-content/uploads/2022/03/banner-oque-fazemos-RAFA.png" alt="Imagem prinncipal página">
        </div>

        <div class="banner-mobile only-mobile">
            <!-- <img src="/wp-content/uploads/2022/02/Banner-home-principal-desk.png" alt="Imagem prinncipal página"> -->
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
        <div class="first text-post">
            <div class="first-texts">
                <p>
                    Nossa experiência de mais de 20 anos como uma agência de design e estratégia criativa, nos garante o know-how na aplicação e no desenvolvimento dos melhores métodos, tanto para a consolidação quanto para a construção de marcas e identidades.
                </p>
                <p>
                    Nessas duas décadas, estabelecemos inúmeras parcerias com clientes de porte regional, nacional e internacional, e em projetos relacionados à competitiva dos negócios, utilizando sempre uma abordagem proprietária para a construção de marca fortes que envolve processos de: estudos de mercado, naming, analytics, branding, estratégia de marca, identidade de marca e design de embalagens.
                </p>
                <p>
                    O que fazemos?
                </p>
            </div>

            <div class="first-post">
                <div class="part-post">
                    <?php dynamic_sidebar('oquefazemos-post'); ?>
                </div>
                <div class="part-text-button">
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

        <div class="second text">
            <div class="link-left">
                <?php dynamic_sidebar('imagem-link-home-left'); ?>
            </div>

            <div class="texts">
                <div class="item">
                    <p class="title"> BRANDING </p>
                    <p class="descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>

                <div class="item">
                    <p class="title"> DESIGN DE EMBALAGENS </p>
                    <p class="descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>

                <div class="item">
                    <p class="title"> DESIGN GRÁFICO </p>
                    <p class="descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>

                <div class="item">
                    <p class="title"> POSICIONAMENTO DE MARCA </p>
                    <p class="descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>

                <div class="item">
                    <p class="title"> PLANEJAMENTO DE VENDAS ONLINE </p>
                    <p class="descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>

                <div class="item">
                    <p class="title"> ESTRATÉGIA DIGITAL </p>
                    <p class="descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>

                <div class="item">
                    <p class="title">
                        GOOGLE ADS <br />
                        FACEBOOK ADS
                    </p>
                    <p class="descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>

            <div class="link-rigth">
                <?php dynamic_sidebar('imagem-link-home-rigth'); ?>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>