<?php get_header() ?>

<?php
$immagineIntroduttiva = get_field('rottamazione_immagine_introduttiva');
$sottotitoloIntroduttivo = get_field('rottamazione_sottotitolo_introduttivo');
$secondoSottotitolo = get_field('rottamazione_secondo_sottotitolo');
$boxes = get_field('rottamazione_boxes');

get_template_part('template-part/hero-prodotti');
?>

<div class="page-content">
    <div class="site-content ">
        <div class="immagine-prodotti-container">
            <div class="container">
                <div class="row justify-content-center pt-5 pb-5">
                    <h1 class="prodotti-titolo fs-72"><?php the_title(); ?></h1>
                </div>
                <div class="row justify-content-center">
                    <img src="<?php echo $immagineIntroduttiva; ?>" alt="" srcset="">
                </div>
            </div>
        </div>

        <?php if (!empty($boxes)) { ?>
            <section class="section-lgx">
                <div class="container">
                    <h2 class="testo-nero-verardi"><?php echo $sottotitoloIntroduttivo; ?></h2>
                </div>
            </section>
            <section class="section-lgx monitoraggio-sezione-icone">
                <div class="container">
                    <div class="pbminfotech-ele-ptable-style-1">
                        <h3 class="testo-bianco-verardi mb-5"><?php echo $secondoSottotitolo; ?></h3>
                        <div class="row">
                            <?php foreach ($boxes as $box) { ?>
                                <div class="pbmit-ptable-col col-lg-4 col-md-6 bordo-destra">
                                    <div class="pbmit-pricing-table-box testo-sinistra">
                                        <div class="pbminfotech-ptable-price-w mb-5">
                                            <img src="<?php echo $box['icona']; ?>" alt="">
                                        </div>
                                        <div class="mt-5">
                                            <p class="font-bold fs-28"><?php echo $box['testo']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!-- FINE BLOCK CON ICONE -->
    </div>
</div>
<?php get_footer() ?>