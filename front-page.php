<?php get_header() ?>
<?php
$testoSopraVideo = get_field('home_testo_sopra_video');
$primoSottotitolo = get_field('home_primo_sottotitolo');
$primoTesto = get_field('home_primo_testo');
$primaScrittaCheScorre = get_field('home_prima_scritta_che_scorre');
$secondaScrittaCheScorre = get_field('home_seconda_scritta_che_scorre');
$titoloSlider = get_field('home_titolo_slider_orizzontale');
$testoSlider = get_field('home_testo_slider_orizzontale');
$slides = get_field('home_slides');
$dati = get_field('home_dati');
$titoloSezioneDati = get_field('home_titolo_sezione_dati');
$testoSezioneDati = get_field('home_testo_sezione_dati');
$immagineSezioneDati = get_field('home_immagine_sezione_dati');
$testoBottoneSezioneDati = get_field('home_testo_bottone_sezione_dati');
$linkBottoneSezioneDati = get_field('home_link_bottone_sezione_dati');
?>

<!-- VIDEO HERO -->
<div class="pbmit-slider-area pbmit-slider-one">
    <div class="swiper-slider" data-autoplay="false" data-loop="false" data-dots="false" data-arrows="false" data-columns="1" data-margin="0" data-effect="fade">
        <div class="swiper-wrapper swiper-wrapper-home">
            <!-- Slide1 -->
            <div class="swiper-slide">
                <div class="pbmit-slider-item">
                    <div class="pbmit-slider-bg">
                        <video autoplay loop muted>
                            <source src="<?php echo TEMPPATH; ?>/assets/video/video_home.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="pbmit-slider-content">
                                    <h1 class="pbmit-title transform-left transform-delay-2 font-bold text-center"><?php echo $testoSopraVideo; ?></h1>

                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page content -->
<div class="page-content">

    <section class="section-lgx container-bianco-testo">
        <div class="container">
            <div class="row testo">
                <div class="col-12">
                    <h2><?php echo $primoSottotitolo; ?></h2>
                    <p><?php echo $primoTesto ?></p>
                </div>
                <div class="col-12">
                    <a class="pbmit-btn pbmit-btn-outline" href="/chi-siamo/">
                        <span class="pbmit-button-content-wrapper">
                            <span class="pbmit-button-icon pbmit-align-icon-right" style="color: #db0029">
                                <svg xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="pbmit-svg-arrow" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                    <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                    <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                    <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                </svg>
                            </span>
                            <span class="pbmit-button-text">LA NOSTRA STORIA</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRITTA CHE SCORRE -->
    <?php
    set_query_var('scritta_che_scorre', $primaScrittaCheScorre);
    get_template_part('template-part/rolling-text') ?>
    <!-- SCRITTA CHE CORRE END -->

    <!-- SEZIONE DATI START -->
    <?php if (!empty($dati)) { ?>
        <section class="section-lgx pbmit-bg-color-blackish">
            <div class="container">
                <div class="row align-items-center g-0">
                    <div class="col-md-3 col-xl-2">
                        <div class="fid-style-7-area">
                            <?php foreach ($dati as $dato) { ?>
                                <div class="pbminfotech-ele-fid-style-7">
                                    <div class="pbmit-fld-contents">
                                        <h3 class="pbmit-fid-title"><?php echo $dato['titolo_dato']; ?></h3>
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-fid"></span>
                                            <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="300" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style=""><?php echo $dato['numero_dato']; ?></span>
                                            <span class="pbmit-fid"><span>+</span></span>
                                        </h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-xl-5">
                        <img src="<?php echo $immagineSezioneDati; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-12 col-xl-5">
                        <div class="about-us-one-content">
                            <div class="pbmit-heading-subheading">
                                <h2 class="pbmit-title fs-40"><?php echo $titoloSezioneDati; ?></h2>
                            </div>
                            <div class="pbmit-ihbox-style-9">
                                <div class="pbmit-ihbox-wapper" style="margin-bottom: 4rem">
                                    <div class="pbmit-ihbox-wapper-inner">
                                        <div class="pbmit-heading-desc"><?php echo $testoSezioneDati; ?></div>
                                    </div>
                                </div>
                                <a href="<?php echo $linkBottoneSezioneDati; ?>">
                                    <button type=" submit" class="pbmit-btn pbmit-btn-shape-round">
                                        <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-icon pbmit-align-icon-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="pbmit-svg-arrow" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                    <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                    <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                    <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                </svg>
                                            </span>
                                            <span class="pbmit-button-text"><?php echo $testoBottoneSezioneDati; ?></span>
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- SEZIONE DATI END -->

    <!-- SLIDER ORIZZONTALE -->
    <?php if (!empty($slides)) { ?>
        <section class="section-lgx pbmit-bg-color-global overflow-hidden">
            <div class="container pbmit-col-stretched-yes pbmit-col-right">
                <div class="row align-items-center">
                    <div class="col-md-8 col-xl-6">
                        <div class="pbmit-heading-subheading pbmit-text-color-white animation-style2">
                            <h2 class="pbmit-title font-bold fs-48 mb-4"><?php echo $titoloSlider; ?></h2>
                            <p><?php echo $testoSlider; ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-6">
                        <div class="service-one-arrow swiper-btn-custom d-flex flex-row-reverse"></div>
                    </div>
                </div>
                <div class="pbmit-col-stretched-right">
                    <div class="swiper-slider" data-arrows-class="service-one-arrow" data-loop="true" data-autoplay="true" data-dots="false" data-arrows="true" data-columns="3.2" data-margin="30" data-effect="slide">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php foreach ($slides as $slide) { ?>
                                <article class="pbmit-service-style-1 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-service-content">
                                            <div class="pbmit-featured-img-wrapper">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="<?php echo $slide['immagine']; ?>" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-content">
                                                <div class="pbmit-ihbox-style-5">
                                                    <div class="pbmit-ihbox-contents">
                                                        <h2 class="pbmit-element-title">
                                                            <a href="<?php echo $slide['pagina_destinazione']; ?>">
                                                                <span class="pbmit-service-title titolo-slide-home">
                                                                    <?php echo $slide['titolo_slide']; ?>
                                                                    <svg class=" pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                                        <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                                        <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                                        <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </h2>
                                                        <div class="pbmit-ihbox-btn">
                                                            <a href="<?php echo $slide['pagina_destinazione']; ?>">
                                                                <span>
                                                                    <svg class="pbmit-svg-arrow pbmit-svg-arrow-home" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19" height="19" viewBox="0 0 19 19" xml:space="preserve">
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
                                    </div>
                                </article>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- SLIDER ORIZZONTALE END -->

    <!-- SCRITTA CHE SCORRE -->
    <?php
    set_query_var('scritta_che_scorre', $secondaScrittaCheScorre);
    get_template_part('template-part/rolling-text') ?>
    <!-- SCRITTA CHE CORRE END -->

</div>
<!-- page content End -->
<?php get_footer() ?>