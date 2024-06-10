<?php get_header() ?>
<?php
$titolo = get_field('assistenza_titolo_testata');
$immagine = get_field('assistenza_immagine_testata');
$primoSottotitolo = get_field('assistenza_primo_sottotitolo');
$primoTesto = get_field('assistenza_primo_testo');
$secondoSottotitolo = get_field('assistenza_secondo_sottotitolo');
$secondoTesto = get_field('assistenza_secondo_testo');
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

<!-- SLIDE CHE SI SOVRAPPONGONO -->
<section class="section-xl" data-cursor="global-color" style="background-color: #979797;">
    <div class="container" style="background-color: #979797;">
        <div class=" pbmit-element-card-box-style-1">
            <div class="pbmit-content-box">
                <div class="pbmit-card-box-wrapper">
                    <div class="pbmit-card-box-wrapper-inner d-flex align-items-center justify-content-between">
                        <div class="pbmit-card-box-img col-lg-6 col-md-12">
                            <div class="pbmit-card-box-item-image">
                                <img src="images/homepage-01/card-img-01.jpg" alt="Answer a Few Questions">
                            </div>
                        </div>
                        <div class="pbmit-card-box col-lg-6 col-md-12">
                            <div class="pbmit-card-box-number">
                                <h4>01</h4>
                            </div>
                            <div class="pbmit-card-box-title">
                                <h4>Answer a Few Questions</h4>
                            </div>
                            <div class="pbmit-card-box-desc">We welcome and celebrate different perspectives to help our firm, our clients and our people achieve enduring results.</div>
                            <div class="pbmit-card-box-line">
                                <div class="pbmit-card-box-line-inner">
                                    <p>Translating the design into code using Webflow</p>
                                </div>
                                <div class="pbmit-card-box-line-inner">
                                    <p>Responsive and functions perfectly across all devices</p>
                                </div>
                                <div class="pbmit-card-box-line-inner">
                                    <p>Testing the website thoroughly before launch</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pbmit-card-box-wrapper">
                    <div class="pbmit-card-box-wrapper-inner d-flex align-items-center justify-content-between">
                        <div class="pbmit-card-box-img col-lg-6 col-md-12">
                            <div class="pbmit-card-box-item-image">
                                <img src="images/homepage-01/card-img-02.jpg" alt="Changing of finance goals">
                            </div>
                        </div>
                        <div class="pbmit-card-box col-lg-6 col-md-12">
                            <div class="pbmit-card-box-number">
                                <h4>02</h4>
                            </div>
                            <div class="pbmit-card-box-title">
                                <h4>Changing of finance goals</h4>
                            </div>
                            <div class="pbmit-card-box-desc">Interview vetted advisors to find the best fit Lorem ipsum dolor sit amet, consectetur adip iscing elit.</div>
                            <div class="pbmit-card-box-line">
                                <div class="pbmit-card-box-line-inner">
                                    <p>Translating the design into code using Webflow</p>
                                </div>
                                <div class="pbmit-card-box-line-inner">
                                    <p>Responsive and functions perfectly across all devices</p>
                                </div>
                                <div class="pbmit-card-box-line-inner">
                                    <p>Testing the website thoroughly before launch</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pbmit-card-box-wrapper">
                    <div class="pbmit-card-box-wrapper-inner d-flex align-items-center justify-content-between">
                        <div class="pbmit-card-box-img col-lg-6 col-md-12">
                            <div class="pbmit-card-box-item-image">
                                <img src="images/homepage-01/card-img-03.jpg" alt="Increase Your Net Worth">
                            </div>
                        </div>
                        <div class="pbmit-card-box col-lg-6 col-md-12">
                            <div class="pbmit-card-box-number">
                                <h4>03</h4>
                            </div>
                            <div class="pbmit-card-box-title">
                                <h4>Increase Your Net Worth</h4>
                            </div>
                            <div class="pbmit-card-box-desc">Interview vetted advisors to find the best fit Lorem ipsum dolor sit amet, consectetur adip iscing elit.</div>
                            <div class="pbmit-card-box-line">
                                <div class="pbmit-card-box-line-inner">
                                    <p>Translating the design into code using Webflow</p>
                                </div>
                                <div class="pbmit-card-box-line-inner">
                                    <p>Responsive and functions perfectly across all devices</p>
                                </div>
                                <div class="pbmit-card-box-line-inner">
                                    <p>Testing the website thoroughly before launch</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FINE SLIDE CHE SI SOVRAPPONGONO -->

<div class="container-bianco-testo">
    <div class="container">
        <div class="row testo">
            <div class="col-12">
                <h2><?php echo $primoSottotitolo; ?></h2>
                <p><?php echo $primoTesto ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container-bianco-testo">
    <div class="container">
        <div class="row testo">
            <div class="col-12">
                <h2><?php echo $secondoSottotitolo; ?></h2>
                <p><?php echo $secondoTesto ?></p>
            </div>
        </div>
    </div>
</div>


<!-- SCRITTA CHE CORRE -->

<section class="section-lgb pbminfotech-element-marquee-effect">
    <div class="container-fluid p-0">
        <div class="swiper-slider marquee">
            <div class="swiper-wrapper">
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title">
                            <?php echo $scrittaCheScorre ?>
                        </h2>
                    </div>
                </article>
            </div>
        </div>
        <div class="swiper-slider marquee" data-reverse="true">
            <div class="swiper-wrapper">
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title">
                            <?php echo $scrittaCheScorre ?>
                        </h2>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- SCRITTA CHE CORRE END -->

<?php get_footer() ?>