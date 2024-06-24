<?php get_header() ?>
<?php
$immagineQuadrata = get_field('azienda_immagine_quadrata_primo_box');
$immagineRettangolare = get_field('azienda_immagine_rettangolare');
$secondoTestoPrimoParagrafo = get_field('azienda_secondo_testo_primo_paragrafo');
$secondoTestoParagrafi = get_field('azienda_secondo_testo_paragrafi_successivi');
$secondoTitolo = get_field('azienda_secondo_sottotitolo');
$scrittaCheScorre = get_field('azienda_scritta_che_scorre');

?>

<?php get_template_part('template-part/hero-chi-siamo'); ?>

<div class="page-content">
    <div class="site-content ">
        <section class="section-lgx container-bianco-testo">
            <div class="container">
                <div class="row testo">
                    <div class="col-12">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-6">
                        <div class="blog-one-bg" style="background-image: url('<?php echo $immagineQuadrata; ?>');"></div>
                    </div>
                    <div class="col-md-12 col-xl-6" style="background-color: #000">
                        <div class="blog-one-rightbox">
                            <div class="pbmit-heading-subheading">
                                <h2 class="pbmit-title testo-rosso-verardi font-bold fs-28 mb-5"><?php echo $secondoTestoPrimoParagrafo ?></h2>
                                <div class="testo-bianco-verardi" style="line-height: 34px"><?php echo $secondoTestoParagrafi; ?></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-lgx sfondo-rosso-verardi" style="position: relative; min-height: 45vw; margin-bottom: 12vw">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 mb-5">
                        <div>
                            <p class="fs-48 testo-bianco-verardi font-bold"><?php echo $secondoTitolo; ?></p>
                        </div>
                    </div>
                </div>
                <img src="<?php echo $immagineRettangolare; ?>" alt="" style="position: absolute; right: 0; width: 90%;">
            </div>
        </section>

        <?php
        set_query_var('scritta_che_scorre', $scrittaCheScorre);
        get_template_part('template-part/rolling-text');
        ?>
    </div>
</div>


<?php get_footer() ?>