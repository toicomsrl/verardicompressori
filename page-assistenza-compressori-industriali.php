<?php get_header() ?>
<?php
$titolo = get_field('assistenza_titolo_testata');
$immagine = get_field('assistenza_immagine_testata');
$primoSottotitolo = get_field('assistenza_primo_sottotitolo');
$primoTesto = get_field('assistenza_primo_testo');
$secondoSottotitolo = get_field('assistenza_secondo_sottotitolo');
$secondoTesto = get_field('assistenza_secondo_testo');
$immagineSlides = get_field('assistenza_immagine_slides');
$slides = get_field('assistenza_slides');
$blocchiIcone = get_field('assistenza_blocco_con_icone');
$scrittaCheScorre = get_field('assistenza_scritta_che_scorre');

?>

<div class="pbmit-title-bar-wrapper" style="background-image: url('<?php echo $immagine; ?>'">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <h1 class="pbmit-tbar-title"><?php echo $titolo; ?></h1>
            </div>
        </div>
    </div>
</div>

<section class="section-lgx container-bianco-testo">
    <div class="container">
        <div class="row testo">
            <div class="col-12">
                <h2><?php echo $primoSottotitolo; ?></h2>
                <p><?php echo $primoTesto ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Split-Slide Start -->
<?php if (!empty($slides)) { ?>
    <section class="section-lg pbmit-bg-color-blackish split-slide-section">
        <div class="container">
            <div class="pbmit-element-split-slide-style-1">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle"></h4>
                    <h2 class="pbmit-title"></h2>
                </div>
                <div class="pbmit-element-split-slide-wrapper">
                    <div class="pbmit-bg-imgbox d-flex">
                        <div class="col-md-6 pbmit-img">
                            <div class="pbmit-img-box">
                                <img src="<?php echo $immagineSlides; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="pbmit-item-image-wrap">
                                <div class="pbmit-split-slide-item-image active">
                                    <div class="pbmit-image-wrap">
                                        <img src="" alt="">
                                    </div>
                                </div>
                                <div class="pbmit-split-slide-item-image">
                                    <div class="pbmit-image-wrap">
                                        <img src="" alt="">
                                    </div>
                                </div>
                                <div class="pbmit-split-slide-item-image">
                                    <div class="pbmit-image-wrap">
                                        <img src="" alt="">
                                    </div>
                                </div>
                                <div class="pbmit-split-slide-item-image">
                                    <div class="pbmit-image-wrap">
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pbmit-contentbox">
                            <?php
                            $numSlide = 1;
                            foreach ($slides as $slide) {
                            ?>
                                <div class="pbmit-split-slide-wrapper">
                                    <div class="pbmit-split-slide-box">
                                        <div class="pbmit-split-responsive-image">
                                            <div class="pbmit-split-slide-item-image">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-split-slide-number">
                                            <h4><?php echo "0" . $numSlide; ?></h4>
                                        </div>
                                        <div class="pbmit-split-slide-title">
                                            <h4><?php echo $slide['titolo_slide']; ?></h4>
                                        </div>
                                        <div class="pbmit-split-slide-desc"><?php echo $slide['sottotitolo_slide']; ?></div>
                                    </div>
                                </div>
                            <?php
                                $numSlide++;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Split-Slide End -->

<!-- INIZIO BLOCCO CON ICONE -->
<?php if (!empty($blocchiIcone)) { ?>
    <section class="section-lgx assistenza-sezione-icone">
        <div class="container">
            <div class="pbminfotech-ele-ptable-style-1">
                <div class="row">
                    <?php foreach ($blocchiIcone as $blocco) { ?>
                        <div class="pbmit-ptable-col col-lg-4 col-md-6 bordo-destra">
                            <div class="pbmit-pricing-table-box testo-sinistra">
                                <div class="pbminfotech-ptable-price-w mb-5">
                                    <img src="<?php echo $blocco['icona']; ?>" alt="">
                                </div>
                                <div class="mt-5">
                                    <p class="font-bold fs-28"><?php echo $blocco['titolo']; ?></p>
                                    <p><?php echo $blocco['corpo']; ?></p>
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

<section class="section-lgx">
    <div class=" container">
        <div class="row testo">
            <div class="col-12">
                <h2><?php echo $secondoSottotitolo; ?></h2>
                <p><?php echo $secondoTesto ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section-lgx container-grigio-testo">
    <div class="container">
        <div class="row testo">
            <div class="col-12">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</section>

<!-- SCRITTA CHE SCORRE -->
<?php
set_query_var('scritta_che_scorre', $scrittaCheScorre);
get_template_part('template-part/rolling-text') ?>
<!-- SCRITTA CHE CORRE END -->



<?php get_footer() ?>