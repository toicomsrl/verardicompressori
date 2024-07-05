<?php get_header() ?>

<?php
$mail = get_field('verardi_mail', 'option');
$indirizzo = get_field('verardi_indirizzo', 'option');
$telefono = get_field('verardi_telefono', 'option');
$fax = get_field('verardi_fax', 'option');
$orari = get_field('verardi_orari', 'option');

?>

<?php get_template_part('template-part/hero-base') ?>

<div class="page-content">
    <!-- Ihbox -->
    <section class="ihbox-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                    <div class="pbmit-ihbox-style-2">
                        <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-email-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title testo-nero-verardi">
                                Scrivici
                            </h2>
                            <div class="pbmit-heading-desc testo-nero-verardi"><a class="testo-nero-verardi" href=" mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                    <div class="pbmit-ihbox-style-2">
                        <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-location-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title testo-nero-verardi">
                                Dove puoi trovarci
                            </h2>
                            <div class="pbmit-heading-desc testo-nero-verardi"><?php echo $indirizzo; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                    <div class="pbmit-ihbox-style-2">
                        <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-phone-call"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title testo-nero-verardi">
                                Chiamaci
                            </h2>
                            <div class="pbmit-heading-desc testo-nero-verardi">Telefono: <a class="testo-nero-verardi" href="tel:+39<?php echo $telefono; ?>"><?php echo $telefono; ?></a> <br> Fax: <?php echo $fax; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                    <div class="pbmit-ihbox-style-2">
                        <div class="pbmit-ihbox-icon">
                            <div class="pbmit-ihbox-icon-wrapper">
                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title testo-nero-verardi">
                                Orari
                            </h2>
                            <div class="pbmit-heading-desc testo-nero-verardi"><?php echo $orari; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ihbox End -->
</div>

<?php get_footer() ?>