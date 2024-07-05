<!-- footer -->
<footer class="site-footer pbmit-text-color-white">
    <?php
    if (is_page('lavora-con-noi')) {
        get_template_part('template-part/candidatura-form');
    } else {
        get_template_part('template-part/contact-form');
    }
    ?>
    <?php get_template_part('template-part/newsletter-subscription'); ?>
    <div class="pbmit-footer-main-area">
        <div class="container">
            <div class="pbmit-footer-widget-area">
                <div class="container">
                    <div class="logo-footer" style="margin-top: 80px; margin-bottom: 50px; text-align: left">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pbmit-footer-widget-area">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <div class="widget">
                                <ul>
                                    <li>Via I Maggio Traversa IV 1/3</li>
                                    <li>25035 Ospitaletto (BS)</li>
                                    <li>Tel: <a href="tel:+39030642841">030 642841</a> </li>
                                    <li>Email: <a href="mailto:info@verardicompressori.it">info@verardicompressori.it</a> </li>
                                </ul>
                                <div class="footer-menu-item" style="margin-top: 50px;">
                                    <a href="<?php echo HOME; ?>/wp-content/uploads/2024/06/politica-per-la-qualita.pdf">
                                        <span class="font-bold" style="margin-right: 10px; margin-left: 0" ;>Qualità</span>
                                        <img src=" <?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pbmit-footer-widget-col-2">
                            <div class="widget">
                                <div class="widget-title">Compressori</div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/compressori-industriali/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Compressori industriali</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/compressori-industriali/compressori-a-vite/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Compressori a vite Elgi</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/compressori-industriali/compressori-oil-free/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Compressori oil-free Elgi</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/compressori-aria-brescia/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Compressori aria a Brescia</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/compressori-aria-bergamo/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Compressori aria a Bergamo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-title">Essiccatori</div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/essiccatori/essiccatori-ad-assorbimento/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Essiccatori ad assorbimento</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/essiccatori/essicatori-a-refrigerazione/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Essiccatori a refrigerazione</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-title">Altri prodotti</div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/serbatoi-aria-compressa/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Serbatoi aria compressa</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/trattamento-aria-condensa/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Trattamento aria e condensa</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/filtrazione-aria-compressa/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Filtrazione aria compressa</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/separatori-acqua-olio/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Separatori acqua e olio</span>
                                    </a>
                                </div>
                                <div class="footer-menu-item">
                                    <a href="<?php echo HOME; ?>/strumenti-di-misurazione/">
                                        <img src="<?php echo TEMPPATH; ?>/assets/images/verardi/arrow-red.png" alt="">
                                        <span>Strumenti di misurazione</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pbmit-footer-text-area">
                <div class="container">
                    <div class="pbmit-footer-text-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pbmit-footer-copyright-text-area">
                                    VERARDI GROUP SRL | P.iva01057560177 | <a href="#">Privacy Policy</a> | <a href="#">Cookie Policy</a> | Credits
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->

</div>
<!-- page wrapper End -->

<!-- Search Box Start Here -->
<div class="pbmit-search-overlay">
    <div class="pbmit-icon-close">
        <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
            <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
            <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
        </svg>
    </div>
    <div class="pbmit-search-outer">
        <form class="pbmit-site-searchform">
            <input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
            <button type="submit"></button>
        </form>
    </div>
</div>
<!-- Search Box End Here -->

<!-- Scroll To Top -->
<div class="pbmit-progress-wrap">
    <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- Scroll To Top End -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ949TT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

<?php wp_footer() ?>

</html>