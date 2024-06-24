<?php get_header() ?>

<?php

get_template_part('template-part/hero-prodotti');
$items = get_field('prodotto_link_menu_interno');
$sottotitoloIntroduttivo = get_field('monitoraggio_sottotitolo_introduttivo');
$boxes = get_field('monitoraggio_boxes');
?>

<div class="page-content">
    <div class="site-content ">
        <div class="immagine-prodotti-container<?php if (empty($items)) {
                                                    echo " pb-5";
                                                } ?>">
            <div class="container">
                <div class="row justify-content-center pt-5 pb-5">
                    <h1 class="prodotti-titolo fs-72"><?php the_title(); ?></h1>
                </div>
                <div class="row justify-content-center">
                    <img src="<?php echo get_field('prodotto_immagine'); ?>" alt="" srcset="">
                </div>
            </div>
        </div>


        <?php

        if (!empty($items)) {
        ?>
            <div class="menu-prodotti-container">
                <div class="container">
                    <div class="row">
                        <?php foreach ($items as $item) { ?>
                            <div class="col-md-4">
                                <div class="settore-menu-item">
                                    <div class="pbmit-ihbox-style-5">
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                <a href="<?php echo $item["ancora"] == '#' ? $item["link"] : $item["ancora"]; ?>">
                                                    <span>
                                                        <?php echo $item["testo_link"]; ?>
                                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </h2>
                                            <div class="pbmit-ihbox-btn">
                                                <a href="<?php echo $item["ancora"] == '#' ? $item["link"] : $item["ancora"]; ?>">
                                                    <span>
                                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-wapper"></div>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        <?php } ?>


        <!-- INIZIO BLOCCO CON ICONE -->
        <?php if (!empty($boxes)) { ?>
            <section class="section-lgx">
                <div class="container">
                    <?php echo $sottotitoloIntroduttivo; ?>
                </div>
            </section>
            <section class="section-lgx monitoraggio-sezione-icone">
                <div class="container">
                    <div class="pbminfotech-ele-ptable-style-1">
                        <div class="row">
                            <?php foreach ($boxes as $box) { ?>
                                <div class="pbmit-ptable-col col-lg-4 col-md-6 bordo-destra">
                                    <div class="pbmit-pricing-table-box testo-sinistra">
                                        <div class="pbminfotech-ptable-price-w mb-5">
                                            <img src="<?php echo $box['icona']; ?>" alt="">
                                        </div>
                                        <div class="mt-5">
                                            <p><?php echo $box['testo']; ?></p>
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


        <section class="section-lgx container-bianco-testo">
            <div class="container">
                <div class="row testo">
                    <div class="col-12">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer() ?>